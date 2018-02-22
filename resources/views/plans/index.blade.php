@extends('layouts.app')

@section('content')
<div id="form-header">Membership Details</div>
    <div id="form-view" class="card card-default">
        <div id="form-container" class="second-active">
            <form action="{{ route('subscribe') }}" method="post">
            {{ csrf_field() }}
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
                <hr/>
                <div id="dropin-container"></div>
                <input type="hidden" name="plan" value="slug">
                <div class="input-row col-md-12">
                    <h3 class="total"></h3>
                </div>
                <div class="input-row col-md-12">
                <button class="btn btn-primary prev-btn remove-form"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                <button id="payment-button" style="float: right;" class="btn btn-primary btn-flat hidden" type="submit">Pay now</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/formControls.js') }}"></script>
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





