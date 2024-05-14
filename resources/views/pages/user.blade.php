@extends('layouts.app')

@section('content')

    @if (session()->has('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('success') }}
    </div>
    @elseif (session()->has('danger'))
    <div class="alert alert-danger mt-3" role="alert">
        {{ session('danger') }}
    </div>
    @endif

    <div class="container d-flex align-items-center">
        <div class="row">January 3, 2024</div>
        <a href="{{ route('create.task', ['id' => $user->id]) }}" class="btn btn-primary ms-auto">Add Task</a>
    </div>

    <div class="row container">
        <div id="carouselExampleControls" class="carousel slide bg-dark py-3" data-bs-ride="carousel" data-bs-interval="false">
            <div class="col-8 mx-auto">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="container-fluid d-flex justify-content-center gap-2">
                            <div class="col-2 rounded-circle bg-light d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">1</div>
                            <div class="col-2 rounded-circle bg-light d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">1</div>
                            <div class="col-2 rounded-circle bg-light d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">1</div>
                            <div class="col-2 rounded-circle bg-light d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">1</div>
                            <div class="col-2 rounded-circle bg-light d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">1</div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        2       3       5       6       9
                    </div>
                    <div class="carousel-item">
                        3       5       6       4       2
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev active" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon text-danger"  aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="row gap-4 d-flex justify-content-evenly">
            @foreach ($tasks as $task)
                <div class="card text-center p-0 col-5">
                    <div class="card-header">
                        <div class="container-fluiid text-start fs-5 fw-bold">{{ $task->task }}</div>
                    </div>
                        <div class="card-body text-start">
                            <div class="col-12 d-flex">
                                <h6>Position: <b>CEO</b> </h6>
                                <h6 class="ms-auto">{{ $task->created_at ? \Carbon\Carbon::parse($task->created_at)->format('F j, Y') : 'Not specified' }}</h6>
                            </div>

                            <h6>From: <b>{{ $task->sender }}</b> </h6>
                            <h6>Deadline: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('F j, Y') : 'Not specified' }}</h6>

                            <input class="form-control" type="text" value="{{ $task->message }}" aria-label="Disabled input example" disabled readonly>
                        </div>
                    <div class="card-footer text-muted">
                        <div class="container-fluid text-end">
                            <a href="#" class="btn btn-outline-danger ms-auto">Delete</a>
                            <a href="#" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


            {{-- <div class="container-fluid shadow px-4 py-3 rounded-3">
                <div class="row mb-3">{{ $task->task }}</div>

                <div class="row">
                    <div class="col-12 d-flex">
                        <h6>Position: <b>CEO</b> </h6>
                        <h6 class="ms-auto">{{ $task->created_at ? \Carbon\Carbon::parse($task->created_at)->format('F j, Y') : 'Not specified' }}</h6>
                    </div>

                    <h6>From: <b>{{ $task->sender }}</b> </h6>
                    <h6>Deadline: {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('F j, Y') : 'Not specified' }}</h6>

                    <input class="form-control" type="text" value="{{ $task->message }}" aria-label="Disabled input example" disabled readonly>

                    <div class="col-12 d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-outline-danger ms-auto">Delete</a>
                        <a href="#" class="btn btn-primary">Reply</a>
                    </div>
                </div>
            </div> --}}



@endsection
