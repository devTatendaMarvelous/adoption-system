@extends('layouts.app')

@section('content')


<h1>Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="{{ route('login')  }}" method="POST">
    @csrf
    <div class="form-group">
        
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div class="form-group">
        
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
</form>

<div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>

@endsection
