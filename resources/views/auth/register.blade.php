@extends('layouts.app')

@section('content')
<div id="form-header">Register</div>
    <div id="form-view">
        <div id="form-container" class="second-active">
            <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <div class="form-card" id="form-card-1">
                <h2 class="form-card-heading">Personal Information</h2>
                <hr/>
                <div class="input-row col-md-8">
                    <span class="input-label hidden">Your Name</span>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Your Name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">Birth Date</span>
                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required placeholder="Birth Date">
                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label hidden">Your Email</span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Your Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label hidden">Your Password</span>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Your Password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label hidden">Confrim Password</span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                </div>
                <div class="input-row col-md-8">
                    <button class="btn next-btn">Next <i class="fas fa-chevron-right fa-sm"></i></button>
                </div>
            </div>
            <div class="form-card" id="form-card-2">
                <h2 class="form-card-heading">Membership Details</h2>
                <hr/>
               
                <div class="input-row col-md-8">
                <button class="btn prev-btn"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                <button class="btn next-btn">Next <i class="fas fa-chevron-right fa-sm"></i></button>
                </div>
            </div>
            <div class="form-card" id="form-card-3">
                <h2 class="form-card-heading">Billing Information</h2>
                <hr/>
                <div class="input-row col-md-8">
                    <span class="input-label hidden">Address</span>
                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus placeholder="Address">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">City</span>
                        <input id="city" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required placeholder="City">
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">State</span>
                        <select id="state" class="form-control" name="state">

                        </select>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">Zip Code</span>
                        <input id="zip" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required placeholder="Zip Code">
                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                <button class="btn prev-btn"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                <button class="btn next-btn">Next <i class="fas fa-chevron-right fa-sm"></i></button>
                </div>
            </div>
            <div class="form-card form-hidden" id="form-card-4">
                <h2 class="form-card-heading">Shipping Information</h2>
                <hr/>
                <div class="input-row col-md-8">
                    <span class="input-label hidden">Address</span>
                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus placeholder="Address">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">City</span>
                        <input id="city" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required placeholder="City">
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">State</span>
                        <select id="state" class="form-control" name="state">

                        </select>
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                        <span class="input-label">Zip Code</span>
                        <input id="zip" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="zip" value="{{ old('zip') }}" required placeholder="Zip Code">
                                @if ($errors->has('zip'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="input-row col-md-8">
                <button class="btn prev-btn"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                <button class="btn next-btn">Next <i class="fas fa-chevron-right fa-sm"></i></button>
                </div>
            </div>
            <div class="form-card" id="form-card-5">
                <h2 class="form-card-heading">Payment Information</h2>
                <div class="input-row col-md-8">
                @yield('braintree')
                <div id="dropin-container"></div>
                <input type="hidden" name="plan" value="">
                {{ csrf_field() }}
                <hr>
                    <button class="btn prev-btn"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                    <button class="btn submit hidden">Pay now</i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('braintree')
    <script src="https://js.braintreegateway.com/js/braintree-2.30.0.min.js"></script>
    <script>
        $.ajax({
            url: '{{ url('braintree/token') }}'
        }).done(function (response) {
            braintree.setup(response.data.token, 'dropin', {
                container: 'dropin-container',
                onReady: function () {
                    $('#payment-button').removeClass('hidden');
                }
            });
        });
    </script>
@endsection