
// RIGHT NAVIGATION FIX ON SCROLL
// var navbarHeight = $('#hero').outerHeight();
// function hasScrolled() {
//     var st = $(window).scrollTop();
    
//       if (st >= navbarHeight){
//           // Scroll Down
//           //alert();
//           $('#hero').addClass('nav-up');
//           $('body').addClass('nav-up');

//       } 
//       else {
//           // Scroll Up
//           $('#hero').removeClass('nav-up');
//           $('body').removeClass('nav-up');
//       }

// }

// $(window).scroll(function(){
//     hasScrolled();
// });


//  TOGGLE MENU ICON
$('#menu-icon').on('click', function () {
    $('.wrapper').toggleClass('active-nav');
    $('#menu-icon').toggleClass('active-nav');
    $('header#hero').toggleClass('active-nav');
    $('nav#left').toggleClass('active-nav');
});


// SCROLL TO
$(function() {
  $('a[href*=#]:not([href=#])').on("click", function(){
    $('#main').ontouchmove = function(e){ e.preventDefault(); }
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').delay(0).animate({
          scrollTop: target.offset().top
        }, 500);
        $('.wrapper').removeClass('active-nav');
        return false;
      }
    }
  });
});