@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Please Enter Your Security Phrase To Continue</div>

                <div class="card-body">
                  
                  

                    
                    <form class="d-inline text-center" method="POST" action="/check">
                        @csrf
                        <div class="form-group">
        
         <input id="answer" type="answer" class="form-control @error('answer') is-invalid @enderror" name="answer" value="{{ old('answer') }}" placeholder="Security Phrase" required autocomplete="answer" autofocus>

                                @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
                        <button type="submit" class="btn btn-primary p- ">{{ __('Send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
