AOS.init({
  duration: 1500,
  once: true,
});


$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('header').addClass('fixed-header');
    }
    else {
        $('header').removeClass('fixed-header');
    }
});


$(document).on('click', '.nav-link[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
});


$(document).ready(function(){
  $(".h-btn > .navbar-toggler").click(function(){
    $(".h-main .h-menu > .navbar").toggleClass("show");
    $("body").toggleClass("show-menu");
  });
});


// $(document).ready(function() {
//     $('.nav-link[href^="#"]').bind('click', function(e) {
//         e.preventDefault(); // prevent hard jump, the default behavior

//         var target = $(this).attr("href"); // Set the target as variable

//         // perform animated scrolling by getting top-position of target-element and set it as scroll target
//         $('html, body').stop().animate({
//             scrollTop: $(target).offset().top
//         }, 1500, function() {
//             location.hash = target; //attach the hash (#jumptarget) to the pageurl
//         });

//         return false;
//     });
// });

// $(window).scroll(function() {
//     var scrollDistance = $(window).scrollTop();
//     // Assign active class to nav links while scolling
//     $('.page-section').each(function(i) {
//         if ($(this).position().top <= scrollDistance) {
//             $('.navbar-nav .nav-link.active').removeClass('active');
//             $('.navbar-nav .nav-link').eq(i).addClass('active');
//         }
//     });
// }).scroll();


$(document).ready(function(){
  $('.accordion-list > li > .answer').hide();
    
  $('.accordion-list > li').click(function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });
  
});

$(function() {
  $(".language-btn").on("click", function(a) {
    $(".language-dropdown").addClass("show");
    a.stopPropagation()
  });
  $(document).on("click", function(a) {
    if ($(a.target).is(".language-dropdown") === false) {
      $(".language-dropdown").removeClass("show");
    }
  });
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


var counted = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});