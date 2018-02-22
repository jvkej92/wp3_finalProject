@extends('layouts.app')

@section('content')
<div id="form-header">Membership Details</div>
    <div id="form-view" class="card card-default">
        <div id="form-container" class="second-active">
            <form id="form" action="{{ route('subscribe') }}" method="post">
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
                <div class="input-row col-md-12">
                    <label for="card-number" class="input-label hidden">Card Number</label>
                    <div id="card-number" class="form-control"></div>
                </div>
                <div class="input-row col-md-12">
                    <label for="cvv" class="input-label hidden">CVV</label>
                    <div id="cvv" class="form-control"></div>
                </div>

                <div class="input-row col-md-12">
                    <label for="expiration-date" class="input-label hidden">Expiration Date</label>
                    <div id="expiration-date" class="form-control"></div>
                </div>

                <div class="input-row col-md-12">
                                    <h3 class="total"></h3>
                </div>
                <div class="input-row col-md-12">
                <button class="btn btn-primary prev-btn remove-form"><i class="fas fa-chevron-left fa-sm"></i> Prev</button>
                <input type="submit" value="Pay" id="payment-button" style="float: right;" class="btn btn-primary btn-flat hidden" type="submit">Pay now</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/formControls.js') }}"></script>
<!-- Load the required client component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/client.min.js"></script>

<!-- Load Hosted Fields component. -->
<script src="https://js.braintreegateway.com/web/3.31.0/js/hosted-fields.min.js"></script>
<script>
    $.ajax({
        url: '{{ url('
        braintree / token ') }}'
    }).done(function (response) {

        braintree.hostedFields.create({
            client: response.data.token,
            styles: {
                'input': {
                    'font-size': '14px',
                    'font-family': 'helvetica, tahoma, calibri, sans-serif',
                    'color': '#3a3a3a'
                },
                ':focus': {
                    'color': 'black'
                }
            },
            fields: {
                number: {
                    selector: '#card-number',
                    placeholder: '4111 1111 1111 1111'
                },
                cvv: {
                    selector: '#cvv',
                    placeholder: '123'
                },
                expirationMonth: {
                    selector: '#expiration-month',
                    placeholder: 'MM'
                },
                expirationYear: {
                    selector: '#expiration-year',
                    placeholder: 'YY'
                },
                postalCode: {
                    selector: '#postal-code',
                    placeholder: '90210'
                }
            }
        }, function (err, hostedFieldsInstance) {
            if (err) {
                console.error(err);
                return;
            }

            hostedFieldsInstance.on('validityChange', function (event) {
                var field = event.fields[event.emittedBy];

                if (field.isValid) {
                    if (event.emittedBy === 'expirationMonth' || event.emittedBy === 'expirationYear') {
                        if (!event.fields.expirationMonth.isValid || !event.fields.expirationYear.isValid) {
                            return;
                        }
                    } else if (event.emittedBy === 'number') {
                        $('#card-number').next('span').text('');
                    }

                    // Remove any previously applied error or warning classes
                    $(field.container).parents('.form-group').removeClass('has-warning');
                    $(field.container).parents('.form-group').removeClass('has-success');
                    // Apply styling for a valid field
                    $(field.container).parents('.form-group').addClass('has-success');
                } else if (field.isPotentiallyValid) {
                    // Remove styling  from potentially valid fields
                    $(field.container).parents('.form-group').removeClass('has-warning');
                    $(field.container).parents('.form-group').removeClass('has-success');
                    if (event.emittedBy === 'number') {
                        $('#card-number').next('span').text('');
                    }
                } else {
                    // Add styling to invalid fields
                    $(field.container).parents('.form-group').addClass('has-warning');
                    // Add helper text for an invalid card number
                    if (event.emittedBy === 'number') {
                        $('#card-number').next('span').text('Looks like this card number has an error.');
                    }
                }
            });

            hostedFieldsInstance.on('cardTypeChange', function (event) {
                // Handle a field's change, such as a change in validity or credit card type
                if (event.cards.length === 1) {
                    $('#card-type').text(event.cards[0].niceType);
                } else {
                    $('#card-type').text('Card');
                }
            });

            $('.panel-body').submit(function (event) {
                event.preventDefault();
                hostedFieldsInstance.tokenize(function (err, payload) {
                    if (err) {
                        console.error(err);
                        return;
                    }

                    // This is where you would submit payload.nonce to your server
                    alert('Submit your nonce to your server here!');
                });
            });
        });
    });
</script>
@endsection





