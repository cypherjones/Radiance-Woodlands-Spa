(function($) {
"use strict";
 
$(document).ready(function() {
 
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay: 3000,
    responsiveClass:true,
    dots: true,
    nav: false,
    navText: ['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'], //Note, if you are not using Font Awesome in your theme, you can change this to Previous & Next
    responsive:{
            0:{
                items:1,
                //nav:true
            },
            767:{
                items:1,
                //nav:false
            },
        }
    });
})
})(jQuery);