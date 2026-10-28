<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | College Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="login-body">

<div class="login-container">

    <div class="login-card">

        <div class="login-logo">

            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">

        </div>

        <h2>Welcome Back</h2>

        <p>Login to your College Management System</p>

        @if(session('status'))

            <div class="alert alert-success">

                {{ session('status') }}

            </div>

        @endif

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="mb-3">

                <label>Email Address</label>

                <div class="login-input">

                    <i class="fa-solid fa-envelope"></i>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required>

                </div>

                @error('email')

                    <small class="text-danger">{{ $message }}</small>

                @enderror

            </div>

            <div class="mb-3">

                <label>Password</label>

                <div class="login-input">

                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required>

                </div>

                @error('password')

                    <small class="text-danger">{{ $message }}</small>

                @enderror

            </div>

            <div class="login-options">

                <label>

                    <input type="checkbox" name="remember">

                    Remember Me

                </label>

                @if (Route::has('password.request'))

                    <a href="{{ route('password.request') }}">

                        Forgot Password?

                    </a>

                @endif

            </div>

            <button type="submit" class="login-btn">

                <i class="fa-solid fa-right-to-bracket"></i>

                Login

            </button>

        </form>

    </div>

</div>

</body>

</html>