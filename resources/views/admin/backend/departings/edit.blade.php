@extends('admin.backend.departings.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('departing.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('departing.update', $data) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card shadow mb-4">

        <div class="row">
            <div class="col-6">
                <div class="form-group ml-2">
                    <strong> Name:</strong>
                    <input type="text" name="name" value="{{ old('name')!==null ? old('name') : $data->name }}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mr-2">
                    <strong> description:</strong>
                    <input type="text" name="description" value="{{ old('description')!==null ? old('description') : $data->description }}" class="form-control" placeholder="description">
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
@endsection
