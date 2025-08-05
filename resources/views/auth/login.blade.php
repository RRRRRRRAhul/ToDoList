@extends('layout.auth')

@section('style')
    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 1rem;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        @media (max-width: 576px) {
            .form-signin {
                padding: 1.5rem;
            }

            .form-signin img {
                width: 100px;
                height: auto;
            }
        }
    </style>
@endsection

@section('content')
    <main class="form-signin w-100" style="max-width: 400px;">
        <div class="form-signin bg-white shadow rounded p-4">
            <form action="{{ route('loginPost') }}" method="POST">
                @csrf

                <div class="text-center mb-4">
                    <img src="{{ asset('img/pngegg.png') }}" alt="R Logo" width="125" height="57" class="img-fluid">
                    <h1 class="h4 mt-3">Please log in</h1>
                </div>

                <div class="form-floating mb-2">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            </form>

            <div class="text-center mt-4">
                <p class="mb-1">Don't have an account?</p>
                <a href="{{ route('signin') }}" class="btn btn-success w-100">Register</a>
                <p class="mt-3 mb-0 text-muted">&copy; 2017–2025</p>
            </div>
        </div>
    </main>
@endsection
