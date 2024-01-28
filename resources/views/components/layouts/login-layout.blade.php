<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>{{ $title ?? 'Page Title' }}</title>

    <style>
        .icon {
            width: 40px;
        }

        .icon-sm {
            width: 20px;
        }

        .fill {
            fill: yellow;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex align-items-center" style="height: 400px;">
        <div class="container mx-auto p-3 border border-dark-subtle rounded bg-light col-10 col-sm-4">
            <h2>{{ $form }}</h2>
            {{ $slot }}
        </div>
    </div>

    @if ($errors->any())
    <div class="fixed-top">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger m-1 d-flex justify-content-between">
            <span class="text-danger">{{$error}}</span>
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endforeach
    </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>