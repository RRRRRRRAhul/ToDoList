@extends('layout.default')

@section('content')
    <!-- Begin page content -->
    <main class="flex-shrink-0 mt-5">
        <div class="container mt-5">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            <h1 class="mt-4 mb-3 text-center text-md-start">Tasks List</h1>

            <div class="my-3 p-3 bg-light rounded shadow-sm">
                @forelse ($tasks as $task)
                    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center text-body-secondary pt-3 border-bottom pb-3">
                        <div class="me-3 mb-2 mb-md-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                        <div class="w-100">
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <strong class="text-dark">
                                    {{ $task->title }} | {{ $task->deadline }}
                                </strong>
                                <div class="mt-2 mt-md-0 d-flex gap-2">
                                    <a href="{{ route('UpdateTaskStatus', $task->id) }}"
                                        class="btn btn-sm btn-primary w-100 w-md-auto">Completed</a>
                                    <a href="{{ route('DeleteTaskStatus', $task->id) }}"
                                        class="btn btn-sm btn-danger w-100 w-md-auto">Delete</a>
                                </div>
                            </div>
                            <span class="d-block text-muted mt-1">{{ $task->description }}</span>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-muted">No tasks available.</p>
                @endforelse

                <div class="d-flex justify-content-center mt-4">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
