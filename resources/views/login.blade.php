<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="px-4 bg-light">

    <section class="vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4 shadow">
            <div class="card text-center">
                <div class="card-header">
                    <div class="container-fluiid text-center fs-5 fw-bold">Welcome Back</div>
                    <div class="container-fluid text-center">Login</div>
                </div>
                <div class="card-body text-start">
                    <form action="" method="POST" class="form px-3 py-2">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="test@gmail.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="test">
                            <label for="password">Password</label>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <div class="container text-center mb-2">
                        <div class="col-12">
                            <a href="{{ route('send-otp') }}">Forget Password</a>
                        </div>

                        Dont have an Account? <a href="{{ route('create-account') }}">Sign up</a>
                    </div>
                    <div class="container-fluid text-center">
                        <button type="submit" class="px-5 btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row mb-3">
            <div class="container-fluiid text-center fs-5 fw-bold">Welcome Back</div>
            <div class="container-fluid text-center">Login</div>
        </div>

        <div class="col-12 col-md-8 col-lg-4">
            <form action="" method="POST" class="form px-3 py-5 rounded-3 shadow bg-light">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="test@gmail.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="test">
                    <label for="password">Password</label>
                </div>

                <div class="row">
                    <div class="container text-center mb-2">
                        <div class="col-12">
                            <a href="#">Forget Password</a>
                        </div>

                        Dont have an Account? <a href="#">Sign up</a>
                    </div>
                    <div class="container-fluid text-center">
                        <button type="submit" class="px-5 btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div> --}}
    </section>

</body>

</html>
