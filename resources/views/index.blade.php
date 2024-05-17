<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="py-5 px-4">
    <div class="row mb-3">
        <div class="col-7 fs-4 fw-bold">Notifiaction-System</div>
        <div class="col-5 d-flex">
            <a href="{{ route('create-account') }}" class="btn btn-primary ms-auto">Sign up</a>
            <a href="{{ route('login') }}" class="btn btn-outline-secondary ms-1">Login</a>
        </div>
    </div>

    <div class="container mt-auto d-flex flex-column justify-content-end gap-2" style="height: 400px">
        <div class="row">
            <div class="col-10 col-lg-8 fs-4 fw-bold">Your Personal Task Manager</div>
            <div class="col-10 col-lg-8 fs-6 fw-bold">Stay organized and keep track of all your tasks effortlessly. Whether it's work, study, or personal goals, manage your to-do list efficiently with our intuitive interface.</div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('login') }}" class="btn btn-primary">Let's Start</a>
            </div>
        </div>
    </div>
</body>

</html>
