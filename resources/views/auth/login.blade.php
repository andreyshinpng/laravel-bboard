@extends('layouts.main')

@section('content')
<div class="container">
    <div class="login-block">
        <h1>{{ __('Вход') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <label for="email">Email</label><br>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="row">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label><br>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="row">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
