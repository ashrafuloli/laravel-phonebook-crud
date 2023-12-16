<!doctype html>
<html lang="en">
<head>
    @include('includes.header')
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        @include('includes.menus')

        <div class="col-xl-9">
            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
