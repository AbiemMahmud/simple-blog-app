<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>{{ $title ?? 'Page Title' }}</title>

    <style>
        .profile {
            width: 50px;
            height: 50px;
        }

        .profile-lg {
            width: 300px;
            height: 300px;
        }

        .icon {
            width: 40px;
        }

        .active .icon {
            fill: white !important;
        }

        .icon-md {
            width: 30px !important;
        }

        .icon-sm {
            width: 20px !important;
        }

        .fill {
            fill: yellow;
        }

        .f-white {
            fill: white !important;
        }
    </style>
</head>

<body>
    {{ $slot }}

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