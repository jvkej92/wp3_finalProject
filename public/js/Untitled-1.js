    var inputTrigger = 'input.large';
    var labelClass = '.gfield_label';

    jQuery(labelClass).addClass('hidden');
    //Clear placeholder and add animation to floating label
    jQuery(inputTrigger).focusin(function(){
        var parentContainer = jQuery(this).parent().parent();
        var label = parentContainer.find(labelClass);
        jQuery(this).removeAttr('placeholder');
        label.removeClass('hidden');
    });

    jQuery(inputTrigger).focusout(function(){
        if(!jQuery(this).val()){
            var parentContainer = jQuery(this).parent().parent();
            var label = parentContainer.find(labelClass);
            var placeholderValue = label.text();
            jQuery(this).attr('placeholder', placeholderValue);
            label.addClass('hidden');
        }
    });