@extends('admin.backend.records.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('record.index') }}"> Back</a>
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
  
    <form action="{{ route('record.update', $data) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card shadow mb-4">

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <strong> Date:</strong>
                    <input type="date" name="name" value="{{ old('date')!==null ? old('date') : $data->date }}" class="form-control" placeholder="Date">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <strong> Name:</strong>
                    <input type="text" name="name" value="{{ old('name')!==null ? old('name') : $data->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <strong> Price:</strong>
                    <input type="text" name="price" value="{{ old('price')!==null ? old('price') : $data->price }}" class="form-control" placeholder="Price">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <strong> Descirption:</strong>
                    <input type="text" name="description" value="{{ old('description')!==null ? old('description') : $data->description }}" class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <strong> ETC:</strong>
                    <input type="text" name="etc" value="{{ old('etc')!==null ? old('etc') : $data->etc }}" class="form-control" placeholder="ETC">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </form>
@endsection
