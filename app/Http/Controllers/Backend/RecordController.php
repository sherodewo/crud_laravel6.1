<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Record;
use function foo\func;
use Illuminate\Http\Request;
use DataTables;
use Laravel\Passport\HasApiTokens;

class RecordController extends Controller
{

    /** get data table to show on method @index
     * @return mixed
     */
    public function dataTables()
    {
        $data = numrows(record::all());
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return
                '<a href="'.route('record.edit', $data->id).'" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                <a href="'.route('record.delete', $data->id).'" class="btn btn-danger btn-circle btn-sm "><i class="fas fa-trash"></i></a>';
            })
            ->editColumn('total',function ($data){
                $sum = $data->price;
//                $sum = $data->price;
               return 'Rp.'.$sum;
            })
            ->editColumn('price', function ($data){
                return 'Rp.'.$data->price;
            })
            ->make(true);
    }

    /** show datatable
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.backend.records.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.records.create');
    }

    /**
     * @param CreateRecordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);

        $data = new Record([
           'date' => $request->get('date'),
           'name' => $request->get('name'),
           'price' => $request->get('price'),
           'description' => $request->get('description'),
           'etc' => $request->get('etc'),
        ]);
        $data->save();

        return redirect()->route('record.index')
            ->with('success','record created successfully.');
    }

    /**
     * @param record $data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Record $data)
    {
        return view('admin.backend.records.show',compact('data'));
    }

    /**
     * @param record $record
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Record $data)
    {
        return view('admin.backend.records.edit',compact('data'));
    }

    /**
     * @param Request $request
     * @param record $data
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Record $data)
    {
        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);
        $data->update($request->all());
        return redirect('/record')->with('success', 'record has been updated');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $data = Record::find($id);
        $data->delete();

        return redirect()->route('records.index')
            ->with('success','record deleted successfully');
    }
}
