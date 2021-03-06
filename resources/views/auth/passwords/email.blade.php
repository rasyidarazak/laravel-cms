@extends('layouts.main')

@section('title', 'Forgot Password')

@section('content')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
    <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<form class="user" method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter Email Address...">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">Send Password Reset Link</button>
</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
</div>
<div class="text-center">
    <a class="small" href="{{ route('register') }}">Create an Account!</a>
</div>
@endsection