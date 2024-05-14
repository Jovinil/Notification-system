<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="px-4">

    <section class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4 shadow">
            <div class="card text-center">
                <div class="card-header">
                    <div class="container-fluiid text-center fs-5 fw-bold">Welcome Back</div>
                    <div class="container-fluid text-center">Login</div>
                </div>
                <div class="card-body text-start">
                    <form action="{{ route('user-login') }}" method="POST" class="form px-3 py-2">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="JonhDoe">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="test">
                        </div>
                    {{-- </form> --}}
                </div>
                <div class="card-footer text-muted">
                    <div class="container text-center mb-2">
                        <div class="col-12">
                            <a href="{{ route('send-otp.index') }}">Forget Password</a>
                        </div>

                            Dont have an Account? <a href="{{ route('create-account') }}">Sign up</a>
                        </div>
                        <div class="container-fluid text-center">
                            <button type="submit" class="px-5 btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

</body>

</html>
