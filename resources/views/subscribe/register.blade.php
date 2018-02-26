@extends('layouts.app') 
@section('content')
<div class="container-fluid">
<div class="row py-2">
    <div class="col-4 mx-auto">
        <div class="card">
            <h1 class="card-header">Register</h1>
            
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    
                    {{-- Email Input --}}
                    <span class="input-label hidden">Your Email</span>
                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mb-4" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Email"> 
                    @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                    {{-- Birthday Input --}}
                    <span class="input-label">Birth Date</span>
                    <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required>
                    @if ($errors->has('birthday'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('birthday') }}</strong>
                        </span>
                    @endif

                    {{-- Password Input --}}
                    <span class="input-label hidden">Your Password</span>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mb-4" name="password" required placeholder="Your Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    
                    {{-- Confirm Password --}}
                    <span class="input-label hidden">Confrim Password</span>
                    <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" required placeholder="Confirm Password">
                    
                    {{-- Next Button --}}
                    <button class="btn btn-primary btn-block submit">Next <i class="fas fa-chevron-right fa-sm"></i></button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<link href="{{ asset('css/formStyle.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="{{ asset('js/formControls.js') }}"></script>
@endsection