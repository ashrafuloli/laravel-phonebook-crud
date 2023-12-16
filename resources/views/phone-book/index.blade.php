<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phone Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header text-bg-dark">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>Phone Book List</span>
                        <a href="{{route('phone-book.create')}}" class="btn btn-sm btn-success">
                            Add Contact
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sl = 1; @endphp
                        @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">{{$sl++}}</th>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->created_at->toDayDateTimeString()}}</td>
                                <td>{{$contact->created_at == $contact->updated_at ? 'Not update yet': $contact->updated_at->toDayDateTimeString()}}</td>
                                <td class="d-flex justify-content-end">
                                    <a href="{{ route('phone-book.show', $contact->id) }}" class="btn btn-sm btn-info">
                                        View
                                    </a>

                                    <a href="{{ route('phone-book.edit', $contact->id) }}"
                                       class="btn btn-sm btn-primary mx-2">
                                        Edit
                                    </a>

                                    {!! Form::open(['method'=>'delete', 'route' => ['phone-book.destroy', $contact->id]]) !!}
                                    {!! Form::submit('Delete', ['type'=>'submit','class'=>'btn btn-sm btn-danger', 'onclick'=> 'return confirm("Are you sure?")']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
