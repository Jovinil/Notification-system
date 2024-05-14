<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="px-4">

    <a href="" class="mt-3 btn btn-dark">Go back</i></a>

    <section class="vh-100 d-flex flex-column justify-content-center align-items-center">

        <div class="col-12 col-md-8 col-lg-4 shadow">
            <div class="card text-center">
                <div class="card-header px-2 py-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center p-0">
                            <div class="container-fluid text-start fs-5 fw-bold">Your Profile</div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            <a href="#" class="btn rounded-circle border border-dark me-3" style="width: 60px; height: 60px;"></a>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    <div class="card-body text-start">
                        <div class="form-group mb-3">
                            <label for="deadline">Deadline:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                            <div class="form-text">Eg: John D. Doe</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="deadline">Mobile Number:</label>
                            <input type="text" class="form-control" name="cp_number" id="cp_number" placeholder="0947123345">
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="container-fluid text-end">
                            <div class="container-fluid text-end">
                                <button type="submit" class="px-5 btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

</body>

</html>
