$(document).ready(function(){
    
      /************/
     /*Animations*/
    /************/
    var inputTrigger = 'input[type="text"], input[type="email"]';
    //Clear placeholder and add animation to floating label
    $(inputTrigger).focusin(function(){
        var parentContainer = $(this).parent();
        var label = parentContainer.find('.input-label');
        $(this).removeAttr('placholder');
        label.addClass('fade-in-and-up').removeClass('hidden');
    });

    $(inputTrigger).focusout(function(){
        if(!$(this).val()){
            var parentContainer = $(this).parent();
            var label = parentContainer.find('.input-label');
            var placeholderValue = label.val();
            $(this).attr('placholder', placeholderValue);
            label.removeClass('fade-in-and-up').addClass('hidden');
        }
    });

});