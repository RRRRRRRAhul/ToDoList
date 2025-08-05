@extends('layout.auth')

<!-- add the css -->
@section('style')
    <style>
        html,
        body {
            height: 100%;
        }

        .form-signin {
            max-width: 330px;
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
    </style>
@endsection


@section('content')
    <main class="form-signin w-50 m-auto">
        <form action="{{ route('loginPost') }}" method="POST">
            @csrf
            <img class="mb-4" src="{{ asset('img/pngegg.png') }}" alt="R Logo" width="125" height="57">
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
            
        </form>
        <p class="mt-4">Don't have any account</p>
        <a href="{{ route('signin') }}" class="btn btn-success">Register</a>
        <p class="mt-3 mb-3 text-body-secondary">&copy; 2017–2025</p>
    </main>

@endsection