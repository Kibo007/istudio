//INIT FUNCTIONS
function init_istudio() {
    $(".selectpicker").select2(); 
    inputChecker();
    pageNavigation();

    //REMOVE ALERT SUCCESS MESSAGE SENT 
    $('.alert-success em').on('click', function() {
        $(this).closest('p').remove();
    }); 
}

// PAGE NAVIGATION
function pageNavigation() { 
    $('.nav').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollOffset: -1,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });
}

//INPUT CHACKER 
function inputChecker() {
    var inputs_leng = $('.input, textarea').length,
        submit = $('#submit'),
        inputs = $('.input, textarea');

    inputs.on('blur change', function() {
        var itemcount = 0,
            el = $(this);

        if ( inputValidator(el) ) { 

            inputs.each(function(i,input) {

                if(input.value.length > 0) {
                    itemcount++;
                }
            });

            if(itemcount == inputs_leng) {
                submit.addClass('enabled').removeClass('disabled');
            } else {
                disable_btn();
            }
        } else {
            disable_btn();
        }
    });

    function disable_btn() {
        submit.removeClass('enabled').addClass('disabled');
    }
}

//INPUT VALIDATOR
function inputValidator(input) {

    var id = input.attr('id');

    if ( id == 'mail' ) {

        if ( !input.val() == '' && validateEmail( input.val() ) ) {
            pass_class(input);
            return true
        } else {
            error_class(input);
            return false
        }

    } else if ( id == 'telephone' ) {

        if ( !input.val() == '' && validatePhone( input.val() ) ) {
            pass_class(input);
            return true
        } else {
            error_class(input);
            return false
        }

    } else {

        if (input.val() == '' ) { 
            error_class(input);
            return false
        } else {
            pass_class(input);
            return true
        }

    }

    //INPUT NOT PASS VALIDATION ADD ERROR CLASS
    function error_class(el) {
        el.closest('.input-prepend').addClass('error');
    }

    //VALIDATION PASS, ADD VALID FUNCTION
    function pass_class(el) {
        el.closest('.input-prepend').removeClass('error');
        
        if ( el.attr('id') !== 'name' ) { 
            el.closest('.input-prepend').addClass('valid');
        }
    }


    //MAIL VALIDATOR REGEX
    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if( !emailReg.test( $email ) ) {
        return false;
        } else {
        return true;
        }
    }

    //PHONE VALIDATOR REGEX
    function validatePhone($phone) {
        var phoneReg = /^[0-9-+]+$/;
        if( !phoneReg.test( $phone ) ) {
        return false;
        } else {
        return true;
        }
    }

}

//ON DOCUMENT READY INIT
$(document).ready(function() {
    init_istudio();
});




