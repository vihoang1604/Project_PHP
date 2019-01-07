$(document).ready(function() {
  $(".menu-icon").on("click", function() {
    $("nav ul").toggleClass("showing");
  });
});

      // Scrolling Effect
$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  }

  else {
    $('nav').removeClass('black');
  }
});

$(function (){
    var info = $('.info');
    $('#mailtip2').mailtip({
    onselected: function (mail){
    info.text('you choosed email: ' + mail)
    }
    });
});

      