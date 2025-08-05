@extends('layout.auth')

@section('style')
    <style>
        html, body {
            height: 100%;
        }

        .card-register {
            max-width: 420px;
            margin: auto;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-floating:focus-within {
            z-index: 2;
        }

        @media (max-width: 576px) {
            .card-register {
                padding: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex align-items-center justify-content-center min-vh-300">
        <div class="card card-register bg-white" style="width: 100%;">
            <div class="text-center mb-4">
                <img src="{{ asset('img/pngegg.png') }}" alt="R Logo" width="100">
                <h2 class="mt-2">Register</h2>
            </div>

            <form action="{{ route('signinPost') }}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <input name="name" type="text" class="form-control" id="floatingName" placeholder="Enter Your Name">
                    <label for="floatingName">Name</label>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                    <label for="floatingEmail">Email address</label>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Register</button>
                <p class="text-muted text-center mb-0">&copy; 2017–2025</p>
            </form>
        </div>
    </div>
@endsection
