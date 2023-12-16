@extends('layouts.master')

@section('title', 'Create Phone Book')

@section('content')
    <div class="card">
        <div class="card-header text-bg-dark">
            <div class="d-flex align-items-center justify-content-between">
                <span>Create New Contact</span>
                <a href="{{route('phone-book.index')}}" class="btn btn-sm btn-info">
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
{{--            @if($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul class="mb-0">--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li>{{$error}}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}


            {!! Form::open(['method'=>'post', 'route' => 'phone-book.store']) !!}

            @include('phone-book.form')

            {!! Form::submit('Add New Contact', ['type'=>'submit','class'=>'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection
