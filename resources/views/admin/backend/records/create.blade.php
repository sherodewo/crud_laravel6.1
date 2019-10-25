@extends('admin.backend.records.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Records</h2>
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
   
<form action="{{ route('record.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Date:</strong>
                <input type="date" name="date" class="form-control" placeholder="Date">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" class="form-control" name="description" placeholder="Descirption">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <strong>Etc:</strong>
                <input type="text" class="form-control" name="etc" placeholder="ETC">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection