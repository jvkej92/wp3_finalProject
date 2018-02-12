@extends('layouts.app')

@section('content')
<div id="form-header">Register</div>
    <div id="form-view">
        <div id="form-container">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-card" id="form-card-1">
                <h2 class="form-card-heading">Personal Information</h2>
                <div class="input-row col-1">
                    <span class="input-label hidden">Name</span>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-row col-1">
                        <span class="input-label hidden">Birth Date</span>
                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required>
                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                    </div>
                <input>
            </div>
            <div class="form-card" id="form-card-2">
                <h2 class="form-card-heading">Contact Information</h2>
            </div>
            <div class="form-card" id="form-card-3">
                <h2 class="form-card-heading">Shipping Information</h2>
            </div>
            <div class="form-card" id="form-card-4">
                <h2 class="form-card-heading">Payment Information]</h2>
            </div>
        </div>
    </div>
@endsection