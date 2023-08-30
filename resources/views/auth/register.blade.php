@extends('auth.layouts.base')

@section('contents')
    <form method="post" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                required
                autofocus
                autocomplete="username"
                value="{{ old('username') }}"
            >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                required
                autofocus
                autocomplete="username"
                value="{{ old('email') }}"
            >
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
                autocomplete="new-password"
            >
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                id="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            >
        </div>

        <a href="{{ route('login') }}">
            Already registered?
        </a>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>

@endsection
