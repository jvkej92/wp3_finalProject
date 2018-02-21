$(document).ready(function(){
    
      /*******************/
     /*Dynamic Population*/
    /********************/
    $('.plan-btn').click(function(){
        var slug = $(this).data('slug');
        var cost = $(this).data('cost');
        $('input[name="plan"]').val(slug);
        $('.total').html(`Total: $${cost}.00`).css('float', 'right');
        // if($('div .add-payment-method-view'))
        //     dropInBraintree();
    });

    // $('.remove-form').click(function(){
    //     $('#dropin-container').empty();
    // });
    

    //Gets all states and generates them as option elements
    fetch("/states").then(response => response.json()).then(response => {
        var select = $('select[name="state"]');
        var states = $.map(response, function(el) { return el });
        $.each(states, function(i, item){
            var abrv = states[i].abrv;
            var state = states[i].state;
            var option  = `<option value="${abrv}">${state}</option>`;
            select.append(option);
        });
    });

    //On blur if the the length of value in the input is equal to 5 send the variable to the getStateByZip function 
    $('input[name="zip"]').blur(function(){
        if($(this).val().length = 5){
            var zip = $(this).val();
            getStateByZip(zip);
        }
    });

    //On keyup if the the length of value in the input is equal to 5 send the variable to the getStateByZip function
    $('input[name="zip"').keyup(function(){
        if($(this).val().length = 5){
            var zip = $(this).val();
            getStateByZip(zip);
        }
    });
    
    //gets an array containing the matching entrey in the state table 
    function getStateByZip(zip){
        var uri = `/states/${zip}`;
        fetch(uri).then(response => response.json()).then(response => {
            var state = $.map(response, function(el) { return el });
            $('#state').val(state[0].abrv);
            $('input[name="city"]').val(state[0].city);
        });
    }

      /************/
     /*Animations*/
    /************/
    var inputTrigger = 'input[type="text"], input[type="email"], input[type="password"]';
    //Clear placeholder and add animation to floating label
    $(inputTrigger).focusin(function(){
        var parentContainer = $(this).parent();
        var label = parentContainer.find('.input-label');
        $(this).removeAttr('placeholder');
        label.removeClass('hidden');
    });

    $(inputTrigger).focusout(function(){
        if(!$(this).val()){
            var parentContainer = $(this).parent();
            var label = parentContainer.find('.input-label');
            var placeholderValue = label.text();
            $(this).attr('placeholder', placeholderValue);
            label.addClass('hidden');
        }
    });

    // Gets pixels of the current form size
    var formWidth = $('#form-view').width();

    $(".next-btn").click(function(e){
        e.preventDefault();
        var errors = 0;

        $(this).parent().parent().find('input').each(function(){
            if(!$(this)[0].checkValidity())
                errors++;
        });

        if(!errors){
            var currentPos = $('#form-container').css('left').split('p');
            var newPosition = Number(currentPos[0]) - formWidth;
            $('#form-container').css('left', `${newPosition}px`);
        }
        else{
            // If the form is invalid, submit it. The form won't actually submit;
            // this will just cause the browser to display the native HTML5 error messages.
            $('form').find('.submit').click();
        }

    });

    $(".prev-btn").click(function(e){
        e.preventDefault();
        var currentPos = $('#form-container').css('left').split('p');
        var newPosition = Number(currentPos[0]) + formWidth;
        $('#form-container').css('left', `${newPosition}px`);
    });

    $('.delivery-btn').click(function(e){
        e.preventDefault();
        if(!$(this).hasClass('selected')) {
            if($('.delivery-btn').hasClass('selected')){
                $('.delivery-btn').toggleClass('selected');
            }
            else{
                $(this).toggleClass('selected');
            }
        }
    });
});