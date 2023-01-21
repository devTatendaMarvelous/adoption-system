@extends('layouts.app')

@section('content')


<h1>Register</h1>
<p class="account-subtitle">Access to our dashboard</p>

 <form method="POST" action="{{ route('register') }}">
                        @csrf
    <div class="form-group">
        
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
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
        
       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Register</button>
    </div>
</form>

<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a></div>






@endsection
