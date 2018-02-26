@extends('layouts.app') 
@section('content')
<div class="container">
    <h1 class="text-center">Payment</h1>
    <p class="text-center">Choose a payment method below:</p>
    <hr class="my-4">
    <div class="row justify-content-around mb-4">
        <div class="col-4 shadow p-4 card text-center align-content-middle">
                <img src="{{ asset('img/creditCard.svg') }}" class="mt-4 mx-auto pb-2" alt="pay with a credit card" height="65">
                <p class="lead">Pay With Card</p>
        </div>
        <div class="col-4 shadow p-4 card text-center align-content-middle">
                <img src="{{ asset('img/paypal.svg') }}" class="mt-4 mx-auto pb-2" alt="pay with paypal" height="55">
                <p class="lead">Pay With Paypal</p>
        </div>
    </div>
    <div class="row justify-content-around mt-4">
        <div class="col-6">
            <h2>Billing Info</h2>
        </div>
            
        <div class="col-6">
            <h2>Credit Card Info</h2>
            <div class="row">
                    <div class="form-group col-sm-12">
                        <span class="control-label">Card Number</span>
                        <!--  Hosted Fields div container -->
                        <div class="form-control" id="card-number"></div>
                        <span class="helper-text"></span>
                    </div>
                </div>
                <div class="row justify-content-between align-items-end px-1">
                        <span class="control-label col-5">Expiration Date</span>
                        <span class="control-label col-4 text-align-right">Security Code</span>
                </div>
                <div class="row mb-4 justify-content-start align-items-end px-3">
                            <!--  Hosted Fields div container -->
                            <div class="form-control col-2 mr-1" id="expiration-month"></div>
                            <div class="form-control col-2" id="expiration-year"></div>
                            <div class="form-control col-4 ml-auto p-2" id="cvv"></div>
                    </div>
                    <div class="row justify-content-end mb-2">
                      <h3 class="total">Total: $</h3>
                    </div>
                    <hr class="my-4"/>
                <button class="submit btn btn-primary btn-block">Submit</button>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<link href="{{ asset('css/formStyle.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="{{ asset('js/formControls.js') }}"></script>
<!-- Load Paypal Option -->
<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>

<script src="{{ asset('js/formControls.js') }}"></script>
<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/client.min.js"></script>

<!-- Load Hosted Fields component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/hosted-fields.min.js"></script>

<!-- Load Paypal Form Loader. -->
<script src="{{ asset('js/paypalHostedForms.js') }}"></script>
@endsection