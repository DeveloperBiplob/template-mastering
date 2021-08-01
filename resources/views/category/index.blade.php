@extends('layouts.master')
@push('css')
    <!-- tailwind: Source Sans Pro -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush
@section('title')
    Category Menage
@endsection

@section('master-content')
    {{-- @if(session()->has('massage'))
        {{ session()->get('massage') }}
    @endif --}}
     <div class="card">
        <div class="card-header">
            <h3 class="text-info d-inline">Menage Category</h3>
            <a href="{{ url('category/create') }}" class="btn btn-success btn-sm" style="float: right">Add Category</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <img width="150px" src="{{ $category->image }}" alt="">
                            </td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{ url('category/edit/' . $category->id) }}">Edit</a>
                                <a class="btn btn-info btn-xs" href="{{ url('category/view/' . $category->id) }}">View</a>
                                <a class="btn btn-danger btn-xs" href="{{ url('category/delete/' . $category->id) }}" onclick=" return confirm('Are you Sure Delete This Data?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $categories->links() }} --}}
        </div>
    </div>
@endsection