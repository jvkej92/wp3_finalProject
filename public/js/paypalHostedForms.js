$.ajax({
    url: '/braintree/token'
}).done(function (response) {
    braintree.client.create({
        authorization: response.data.token
    }, function (err, clientInstance) {
        if (err) {
            console.error(err);
            return;
        }
        braintree.hostedFields.create({
            client: clientInstance,
            styles: {
                'body': {
                    'widht': '0',
                    'height': '0!important'
                },
                'input': {
                    'font-size': '16px',
                    'font-family': 'helvetica, tahoma, calibri, sans-serif',
                    'color': '#3a3a3a',
                    'height': '20px'
                },
                '.number': {
                    'font-family': 'monospace'
                  },
              
                  // Styling element state
                  ':focus': {
                    'color': 'blue'
                  },
                  '.valid': {
                    'color': 'green'
                  },
                  '.invalid': {
                    'color': 'red'
                  },
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
                }
              },
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

            $('#pay-submit').on('click', function (event) {
                event.preventDefault();
                hostedFieldsInstance.tokenize(function (err, payload) {
                    if (err) {
                        console.error(err);
                        return;
                    }

                    // This is where you would submit payload.nonce to your server
                    $('#nonce').val(payload.nonce);

                    $('#form').submit();
                });
            });
        });
    });
});