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

    <a href="{{ route('user-index', ['id' => $user->id]) }}" class="mt-3 btn btn-dark">Go back</i></a>

    <div class="container mt-5">
        <div class="row gap-4 d-flex justify-content-evenly">
            <div class="card text-center p-0 col-12 col-lg-5">
                <div class="card-header">
                    <div class="container-fluiid text-start fs-5 fw-bold">{{ $task->task }}</div>
                </div>
                <div class="card-body text-start">
                    <div class="col-12 d-flex h-auto flex-column">
                        <div class="col-12 d-flex h-auto">
                            <h6>Created at: {{ $task->created_at ? \Carbon\Carbon::parse($task->created_at)->format('F j, Y') : 'Not specified' }}</h6>
                        </div>

                        <h6>Deadline: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('F j, Y') : 'Not specified' }}</h6>

                    </div>

                    {{-- <h6>Deadline: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('F j, Y') : 'Not specified' }}</h6> --}}

                    {{-- <input class="form-control " type="text" value="{{ $task->message }}" aria-label="Disabled input example" disabled readonly> --}}
                    <textarea class="form-control" placeholder="{{ $task->message }}" id="floatingTextarea2" style="height: 100px"  disabled readonly></textarea>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
