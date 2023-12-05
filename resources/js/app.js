import './bootstrap';

$(window).on("load", function() {
    setInterval(function() {
      $(".p-hero-action").css({"opacity": "1", "transition": "all 0.5s ease-in-out"});
      
      setTimeout(function() {
        $(".p-hero-action").css({"opacity": "0.4", "transition": "all 0.4s ease-in-out"});
      }, 1000);
    }, 4000);
  });