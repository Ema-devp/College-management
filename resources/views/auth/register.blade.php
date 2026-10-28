<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | College Management</title>

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

        <h2>Create Account</h2>

        <p>Register to College Management System</p>

        <form method="POST" action="{{ route('register') }}">

            @csrf

            <!-- Name -->

            <div class="mb-3">

                <label>Full Name</label>

                <div class="login-input">

                    <i class="fa-solid fa-user"></i>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        required>

                </div>

                @error('name')

                    <small class="text-danger">{{ $message }}</small>

                @enderror

            </div>

            <!-- Email -->

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

            <!-- Password -->

            <div class="mb-3">

                <label>Password</label>

                <div class="login-input">

                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        required>

                </div>

                @error('password')

                    <small class="text-danger">{{ $message }}</small>

                @enderror

            </div>

            <!-- Confirm Password -->

            <div class="mb-4">

                <label>Confirm Password</label>

                <div class="login-input">

                    <i class="fa-solid fa-lock"></i>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm password"
                        required>

                </div>

            </div>

            <button type="submit" class="login-btn">

                <i class="fa-solid fa-user-plus"></i>

                Create Account

            </button>

            <div class="text-center mt-4">

                <p>

                    Already have an account?

                    <a href="{{ route('login') }}">

                        Login

                    </a>

                </p>

            </div>

        </form>

    </div>

</div>

</body>

</html>