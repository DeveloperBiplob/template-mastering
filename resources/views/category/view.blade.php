@extends('layouts.master')
@push('css')
    <!-- tailwind: Source Sans Pro -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@endpush
@section('title')
    Category Menage
@endsection

@section('master-content')
     <div class="card">
        <div class="card-header">
            <h3 class="text-info d-inline">View Category</h3>
            <a href="{{ url('category') }}" class="btn btn-success btn-sm" style="float: right">View Category</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <img width="150px" src="{{ $category->image }}" alt="">
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection