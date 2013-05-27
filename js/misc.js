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
    var firstinputs = $('.input, textarea').length;

    $('.input, textarea').change(function() {
        var itemcount = 0;

        $('.input, textarea').each(function(i,input) {

            if(input.value.length > 0) {
                itemcount++;
            }
        });

        if(itemcount == firstinputs) {
            $('#submit').removeClass('disabled').addClass('enabled');
        } else {
            $('#submit').removeClass('enabled').addClass('disabled');
        }
    });
}

//ON DOCUMENT READY INIT
$(document).ready(function() {
    init_istudio();
});

