@extends('admin.backend.departing.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show departing</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('departing.index') }}"> Back</a>
            </div>
        </div>
    </div>
<div class="card shadow mb-4 ">
    <div class="row ml-2">
        <div class="col-6">
            <div class="form-group">
                <label class="col-form-label">
                    <strong>name:</strong>
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" disabled>
                </label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label class="col-form-label">
                    <strong>description:</strong>
                    <input type="text" name="description" class="form-control" value="{{$data->description}}" disabled>
                </label>
            </div>
        </div>
    </div>
</div>
@endsection
