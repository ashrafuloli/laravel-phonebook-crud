@extends('layouts.master')

@section('title', 'Phone Book Details')

@section('content')
    <div class="card">
        <div class="card-header text-bg-dark">
            <div class="d-flex align-items-center justify-content-between">
                <span>Phone Book List</span>
                <a href="{{route('phone-book.index')}}" class="btn btn-sm btn-info">
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>{{$phoneBook->id}}</th>
                <tr>
                </thead>
                <tbody>
                </tr>
                <td>Name</td>
                <td>{{$phoneBook->name}}</td>
                <tr>
                </tr>
                <td>Phone</td>
                <td>{{$phoneBook->phone}}</td>
                <tr>
                </tr>
                <td>Created At</td>
                <td>{{$phoneBook->created_at->toDayDateTimeString()}}</td>
                <tr>
                </tr>
                <td>Updated At</td>
                <td>{{$phoneBook->created_at == $phoneBook->updated_at ? 'Not update yet': $phoneBook->updated_at->toDayDateTimeString()}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
