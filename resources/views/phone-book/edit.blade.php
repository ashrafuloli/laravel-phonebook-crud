@extends('layouts.master')

@section('title', 'Edit Phone Book')

@section('content')
    <div class="card">
        <div class="card-header text-bg-dark">
            <div class="d-flex align-items-center justify-content-between">
                <span>Edit Contact</span>
                <a href="{{route('phone-book.index')}}" class="btn btn-sm btn-info">
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            {!! Form::model($phoneBook, ['method'=>'put', 'route' => ['phone-book.update', $phoneBook->id]] ) !!}

            @include('phone-book.form')

            {!! Form::submit('Update Contact', ['type'=>'submit','class'=>'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
