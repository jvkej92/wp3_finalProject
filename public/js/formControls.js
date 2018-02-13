$(document).ready(function(){
    
      /******************/
     /*ASYNC VALIDATION*/
    /******************/
    
    



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

    //Gets pixels of the current form size
    // var formWidth = $('#form-view').width();

    // $(".next-btn").click(function(e){
    //     e.preventDefault();
    //     var errors = 0;

    //     $(this).parent().parent().find('input').each(function(){
    //         if(!$(this)[0].checkValidity())
    //             errors++;
    //     });

    //     if(!errors){
    //         var currentPos = $('#form-container').css('left').split('p');
    //         var newPosition = Number(currentPos[0]) - formWidth;
    //         $('#form-container').css('left', `${newPosition}px`);
    //     }
    //     else{
    //         // If the form is invalid, submit it. The form won't actually submit;
    //         // this will just cause the browser to display the native HTML5 error messages.
    //         $('form').find('.submit').click();
    //     }

    // });

    // $(".prev-btn").click(function(e){
    //     e.preventDefault();
    //     var currentPos = $('#form-container').css('left').split('p');
    //     var newPosition = Number(currentPos[0]) + formWidth;
    //     $('#form-container').css('left', `${newPosition}px`);
    // });

});