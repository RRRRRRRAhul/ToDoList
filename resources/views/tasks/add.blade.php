@extends('layout.default')
@section('content')

    <div class="d-flex justify-content-center align-items-center vh-100">

        <div class="card w-100" style="max-width: 500px;">
            <div class="text-center">
                <h1>Add Task</h1>
            </div>

            <form action="{{ route('addTaskPost') }}" class="p-3" method="POST">
                @csrf 
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <input type="datetime-local" class="form-control" name="deadline">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection