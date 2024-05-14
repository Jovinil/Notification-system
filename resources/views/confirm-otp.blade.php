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
                    <div class="container-fluiid text-start fs-5 fw-bold">Enter OTP</div>
                </div>
                <div class="card-body text-start">
                    <h5 class="card-title">Please check your phone for a text message with your code. Your code is 6 characters long.</h5>
                    <form action="" method="POST" class="form px-4 py-2 card-text">
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group mb-3">
                                    <label for="number">Code:</label>
                                    <input type="text" class="form-control" name="number" id="number" placeholder="number">
                                </div>
                            </div>
                            <div class="col-4">
                                We sent your code to:
                                <b>**********06</b>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <div class="container-fluid text-end">
                        <button type="submit" class="px-5 btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
