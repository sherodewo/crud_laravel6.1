<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DestinationController extends Controller
{
    public function __construct(Destination $destination)
    {
        $this->model = $destination;
    }

    public function dataTables()
    {
        $data =Destination::all();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return
                '<a href="'.route('destination.show', $data->id).'" class="btn btn-primary btn-circle btn-sm "><i class="fas fa-search"></i></a>
                <a href="'.route('destination.edit', $data->id).'" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                <a href="'.route('destination.delete', $data->id).'" class="btn btn-danger btn-circle btn-sm "><i class="fas fa-trash"></i></a>';
            })
            ->addIndexColumn()
            ->make(true);
    }

    /** show datatable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.backend.destinations.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.destinations.create');
    }

    /**
     * @param CreateDestinationRequest $request
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
            ->with('success','destination created successfully.');
    }

    /**
     * @param Destination $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $destination = new Destination();
        $data = $destination->findOrFail($id);
        return view('admin.backend.destinations.show',compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $destination = new Destination();
        $data = $destination->findOrFail($id);
        return view('admin.backend.destinations.edit',compact('data'));
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

        return redirect('/destination')->with('success', 'Destination has been updated');
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
            ->with('success','Destination deleted successfully');
    }
}
