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
                    <div class="container-fluiid text-start fs-5 fw-bold">Change Password</div>
                </div>
                <div class="card-body text-start">
                    <form action="{{ route('change-password', $user->id) }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="New Password">
                            <label for="password">New password:</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Confirm Password" required>
                            <label for="password_confirmation">Confirm password:</label>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="row text-end mt-3">
                            <div class="container-fluid">
                                <button type="submit" class="btn btn-dark">Change Password</button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>

    </section>
</body>

</html>
