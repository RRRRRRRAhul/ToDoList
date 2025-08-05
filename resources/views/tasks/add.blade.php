@extends('layout.default')

@section('content')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card w-100 p-3" style="max-width: 500px;">
            <div class="text-center mb-3">
                <h2 class="fw-bold">Add Task</h2>
            </div>

            <form action="{{ route('addTaskPost') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Task Title" required>
                </div>

                <div class="mb-3">
                    <input type="datetime-local" class="form-control" name="deadline" required>
                </div>

                <div class="mb-3">
                    <textarea class="form-control" name="description" rows="3" placeholder="Task Description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
