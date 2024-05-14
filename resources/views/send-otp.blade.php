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
                    <div class="container-fluiid text-start fs-5 fw-bold">Forgot Password</div>
                </div>
                <form action="" method="POST" class="form px-5 py-2">
                    <div class="card-body text-start">

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="cp_number" id="cp_number" placeholder="test">
                                <label for="cp_number">Number</label>
                            </div>

                    </div>
                    <div class="card-footer text-muted">
                        <div class="container-fluid text-end">
                            <div class="container-fluid text-end">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>



            {{-- <form action="" method="POST" class="form px-5 py-5 rounded-3 shadow bg-light">
                <p>Enter the OTP which we sent to cellphone number: <b>09123456789</b> </p>
                <div class="d-flex flex-row mb-3 gap-3">
                    <input type="text" class="rounded-1 py-2 border border-dark text-center w-25" maxlength="1">
                    <input type="text" class="rounded-1 border border-dark text-center w-25" maxlength="1">
                    <input type="text" class="rounded-1 border border-dark text-center w-25" maxlength="1">
                    <input type="text" class="rounded-1 border border-dark text-center w-25" maxlength="1">
                </div>
                <div class="row">
                    <div class="container-fluid text-center">
                        <a href="#" class="btn btn-link">Resend Code</a>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </form> --}}

    </section>

</body>

</html>
