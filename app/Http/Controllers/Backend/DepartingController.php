<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Departing;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DepartingController extends Controller
{
    public function __construct(Departing $departing)
    {
        $this->model = $departing;
    }

    public function dataTables()
    {
        $data =Departing::all();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return
                '<a href="'.route('departing.show', $data->id).'" class="btn btn-primary btn-circle btn-sm "><i class="fas fa-search"></i></a>
                <a href="'.route('departing.edit', $data->id).'" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                <a href="'.route('departing.delete', $data->id).'" class="btn btn-danger btn-circle btn-sm "><i class="fas fa-trash"></i></a>';
            })
            ->addIndexColumn()
            ->make(true);
    }

    /** show datatable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.backend.departings.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.departings.create');
    }

    /**
     * @param CreateDepartingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            ]);

        $data = new $this->model([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        $data->save();

        return back()
            ->with('success','departing created successfully.');
    }

    /**
     * @param Departing $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $departing = new Departing();
        $data = $departing->findOrFail($id);
        return view('admin.backend.departings.show',compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $departing = new Departing();
        $data = $departing->findOrFail($id);
        return view('admin.backend.departings.edit',compact('data'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $this->model->findOrFail($id);
        $request->validate([
            'from' => 'required',
            'destination' => 'required',
        ]);

       $data->from = $request->get('from');
       $data->destination = $request->get('destination');
       $data->save();

        return redirect('/departing')->with('success', 'Departing has been updated');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = $this->model->find($id);
        $data->delete();

        return back()
            ->with('success','Departing deleted successfully');
    }
}
