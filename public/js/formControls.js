$(document).ready(function(){
    
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

});