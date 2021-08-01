@extends('layouts.master')
@section('title')
    Category Create
@endsection

@section('master-content')
    <div class="card">
        <div class="card-header">
            <h3 style="float: left">Update Category</h3>
            <a href="{{ url('category') }}" class="btn btn-success btn-sm" style="float: right">Back Category</a>
        </div>
        <div class="card-body">
            <form action="{{ url('category/edit/' . $user->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="{{ $user->name }}" name="name" id="" class="form-control">
                    <span class="text-danger">{{ $errors->has('name') ? ($errors->first('name')) : '' }}</span>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="" class="form-control">
                    <span class="text-danger">{{ $errors->has('image') ? ($errors->first('image')) : '' }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection