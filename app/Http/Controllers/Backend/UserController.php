<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Backend\User\UserService;
use function foo\func;
use Illuminate\Http\Request;
use DataTables;
use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{

    /** get data table to show on method @index
     * @return mixed
     */
    public function dataTables()
    {
        $data = numrows(User::all());
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return
                '<a href="'.route('user.show', $data->id).'" class="btn btn-primary btn-circle btn-sm "><i class="fas fa-search"></i></a>
                <a href="'.route('user.edit', $data->id).'" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                <a href="'.route('user.delete', $data->id).'" class="btn btn-danger btn-circle btn-sm "><i class="fas fa-trash"></i></a>';
            })
            ->make(true);
    }

    /** show datatable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.backend.users.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.users.create');
    }

    /**
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = new User([
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'password' => $request->get('password')
        ]);
        $data->save();

        return redirect()->route('users.index')
            ->with('success','user created successfully.');
    }

    /**
     * @param User $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $data)
    {
        return view('admin.backend.users.show',compact('data'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $data)
    {
        return view('admin.backend.users.edit',compact('data'));
    }

    /**
     * @param Request $request
     * @param User $data
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $data)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email||unique:users,email,'.$data->id.',id',
            'password' => 'required|min:8'
        ]);
        $data->update($request->all());
        return redirect('/user')->with('success', 'User has been updated');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->route('users.index')
            ->with('success','user deleted successfully');
    }
}
