//INIT FUNCTIONS
function init_istudio() {
    $(".selectpicker").select2(); 
    inputChecker();
    pageNavigation();
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

    inputs.change(function() {
        var itemcount = 0;

        inputs.each(function(i,input) {

            if(input.value.length > 0) {
                itemcount++;
            }
        });

        if(itemcount == inputs_leng) {
            submit.removeClass('disabled').addClass('enabled');
        } else {
            submit.removeClass('enabled').addClass('disabled');
        }
    });
}

//ON DOCUMENT READY INIT
$(document).ready(function() {
    init_istudio();
});

