<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Details</title>
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
                            <th>{{$contact->id}}</th>
                        <tr>
                        </thead>
                        <tbody>
                        </tr>
                            <td>Name</td>
                            <td>{{$contact->name}}</td>
                        <tr>
                        </tr>
                            <td>Phone</td>
                            <td>{{$contact->phone}}</td>
                        <tr>
                        </tr>
                            <td>Created At</td>
                            <td>{{$contact->created_at->toDayDateTimeString()}}</td>
                        <tr>
                        </tr>
                            <td>Updated At</td>
                            <td>{{$contact->created_at == $contact->updated_at ? 'Not update yet': $contact->updated_at->toDayDateTimeString()}}</td>
                        </tr>
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
