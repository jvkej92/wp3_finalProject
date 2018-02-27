@extends('layouts.app')

@section('content')
<link href="{{ asset('css/formStyle.css') }}" rel="stylesheet">
<div id="form-header" class="mt-4">Membership Details</div>
    <div id="form-view" class="card card-default">
        <div id="form-container" class="second-active">
            <form id="form" action="{{ route('subscribe') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="plan" value="">
            <input type="hidden" id="nonce" name="payment_method_nonce" value="">
            <div class="form-card" id="form-card-1">
                <h2 class="form-card-heading">Choose your plan: </h2>
                <hr/>
                <div class="input-row col-md-12">
                @foreach ($plans as $plan)
                            <li class="list-group-item clearfix">
                                <div class="pull-left">
                                    <h4>{{ $plan->name }}</h4>
                                    <h4>${{ number_format($plan->cost, 2) }} Quarterly</h4>
                                    @if ($plan->description)
                                        <p>{{ $plan->description }}</p>
                                    @endif
                                </div>
                                <a href="#" class="btn plan-btn next-btn" data-slug="{{ $plan->slug }}" data-cost="{{ $plan->cost }}">Choose Plan</a>
                            </li>
                        @endforeach
                </div>
            </div>
            
            <div class="form-card" id="form-card-2">
                <h2 class="form-card-heading">Payment Information</h2>
                <div id="paypal-container"></div>
                <hr/>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label class="control-label">Card Number</label>
                        <!--  Hosted Fields div container -->
                        <div class="form-control" id="card-number"></div>
                        <span class="helper-text"></span>
                    </div>
                </div>
                <div class="row justify-content-between align-items-end px-1">
                        <label class="control-label col-5">Expiration Date</label>
                        <label class="control-label col-4 text-align-right">Security Code</label>
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
                    <hr/>
                    <div class="row col-sm-12 justify-content-center mt-5"> 
                            <button value="submit" id="pay-submit" class="btn btn-success btn-block">Pay with <span id="card-type">Card</span></button>
                    </div>
                    <a href="#" class="prev-btn"><< Back</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Load Paypal Option -->
<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>

<script src="{{ asset('js/formControls.js') }}"></script>

<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/client.min.js"></script>

<!-- Load Hosted Fields component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/hosted-fields.min.js"></script>

<!-- Load Paypal Form Loader. -->
<script src="{{ asset('js/paypalHostedForms.js') }}"></script>




<script>
$.ajax({url: '/braintree/token'}).done(function (response) {
     braintree.setup(response.data.token, "custom", {
        paypal: {
            container: "paypal-container",
            $onReady: function () {
                $('#payment-button').removeClass('hidden');
            }
        },
        onPaymentMethodReceived: function(obj){
            $('#nonce').val(obj.nonce);
            $('#form').submit();
        }
    });
});
</script>

@endsection





