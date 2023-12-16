<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Phone Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-xl-6">
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
                    {!! Form::open(['method'=>'post', 'route' => 'phone-book.store']) !!}

                    {!! Form::label('name', 'Name' , ['class'=>'form-label']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control mb-3', 'placeholder'=>'Enter Full Name']) !!}

                    {!! Form::label('phone', 'Phone' , ['class'=>'form-label']) !!}
                    {!! Form::text('phone', null, ['class'=>'form-control mb-3', 'placeholder'=>'Enter Valid Phone Number']) !!}

                    {!! Form::submit('Add New Contact', ['type'=>'submit','class'=>'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
