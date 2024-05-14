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
                <form action="" method="POST" class="form">
                    <div class="card-body text-start">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cp_number" id="cp_number" placeholder="test">
                            <label for="cp_number">Number</label>
                        </div>

                        <div class="container-fluid text-end">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

</body>

</html>
