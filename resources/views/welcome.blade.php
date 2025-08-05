@extends('layout.default')

@section('content')
    <!-- Begin page content -->
    <main class="flex-shrink-0 mt-5">
        <div class="container mt-5" style="max-width: 800px;">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
            <h1 class="mt-5">Tasks List</h1>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                @foreach ($tasks as $task)
                    <div class="d-flex text-body-secondary pt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark">
                                    {{ $task->title }} | {{ $task->deadline }}
                                </strong>
                                <div>
                                    <a href="{{ route('UpdateTaskStatus', $task->id) }}" class="btn btn-primary"
                                        style="width:105px">Completed</a>

                                    <a href="{{ route('DeleteTaskStatus', $task->id) }}" class="btn btn-danger"
                                        style="width:105px">Delete</a>
                                </div>


                            </div> <span class="d-block">{{ $task->description }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $tasks->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection