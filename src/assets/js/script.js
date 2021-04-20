$(document).on("ready", function () {
  var interval = setInterval(function() {
    if(document.readyState === 'complete') {
      clearInterval(interval);
      done();
    }
  }, 100);

  function done() {
    $(".loading-page img").addClass("fadeOutload");
    setTimeout(function () {
      $(".loading-page").removeClass("is-active");
       
     
        $("html").removeClass("popup");
      $("body").removeClass("popup");
   $(".loading-page").removeClass("loading-page");
      
    }, 1200);
  }

  window.sr = new scrollReveal();
  var mainSlide = new Swiper('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    autoplay: 6000,
    centeredSlides: true,
    effect: 'fade',
    speed: 1000,
    simulateTouch: false,
    onSlideChangeStart: function (mainSlide) {
      var item = mainSlide.activeIndex % 6;
      $(".wave").removeClass("exterior");
      $(".wave").removeClass("rainy");
      $(".wave").removeClass("spring");
      $(".wave").removeClass("summer");
      $(".wave").removeClass("autumn");
      $(".wave").removeClass("winter");
      if (item == 1) {
        $(".wave").addClass("exterior");
      } else if (item == 2) {
        $(".wave").addClass("rainy");
      } else if (item == 3) {
        $(".wave").addClass("spring");
      } else if (item == 4) {
        $(".wave").addClass("summer");
      } else if (item == 5) {
        $(".wave").addClass("autumn");
      } else if (item == 0) {
        $(".wave").addClass("winter");
      }
    },
    onSlideChangeEnd: function (mainSlide) {
      var item = mainSlide.activeIndex % 6;
      if (item == 1) {
        setTimeout(function () {
          $(".title-1").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $(".subtitle-1").removeClass("from-bottom");
        }, 500);
      } else if (item == 2) {
        setTimeout(function () {
          $("#title-2").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $("#subtitle-2").removeClass("from-bottom");
        }, 500);
      } else if (item == 3) {
        setTimeout(function () {
          $("#title-3").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $("#subtitle-3").removeClass("from-bottom");
        }, 500);
      } else if (item == 4) {
        setTimeout(function () {
          $("#title-4").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $("#subtitle-4").removeClass("from-bottom");
        }, 500);
      } else if (item == 5) {
        setTimeout(function () {
          $("#title-5").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $("#subtitle-5").removeClass("from-bottom");
        }, 500);
      } else if (item == 0) {
        setTimeout(function () {
          $(".title-6").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $(".subtitle-6").removeClass("from-bottom");
        }, 500);
      } else {
        setTimeout(function () {
          $(".title-1").removeClass("from-bottom");
        }, 200);
        setTimeout(function () {
          $(".subtitle-1").removeClass("from-bottom");
        }, 500);
      }
    },
  });
});
$(document).on("click", ".nav-language", function (e) {
  e.stopPropagation();
  $(this).toggleClass("is-active");
  $(".language-list").toggleClass("is-active");
});

$(window).on("click", function () {
  $(".nav-language").removeClass("is-active");
  $(".language-list").removeClass("is-active");

  var fullname, email, phone, message;
  fullname = $("#fullname").val();
  email = $("#email").val();
  phone = $("#phone").val();
  message = $("#message").val();
  if (fullname == "") {
    $("label[for='fullname']").removeClass("is-active");
  }
  if (email == "") {
    $("label[for='email']").removeClass("is-active");
  }
  if (phone == "") {
    $("label[for='phone']").removeClass("is-active");
  }
  if (message == "") {
    $("label[for='message']").removeClass("is-active");
  }
});

$(document).on("focus", ".form-control", function (e) {
  e.stopPropagation();
  var label = $(this).data('label');
  $("label[for='" + label + "']").addClass("is-active");
});

$(document).on("click", ".form-control", function (e) {
  e.stopPropagation();
  var label = $(this).data('label');
  $("label[for='" + label + "']").addClass("is-active");
});

$(document).on("click", "#open-map", function () {
  $("#map-modal").addClass("is-active");
  $("html").addClass("popup");
  $("body").addClass("popup");
});

$(document).on("click", ".close", function () {
  $(".map-overlay").removeClass("is-active");
  $("html").removeClass("popup");
  $("body").removeClass("popup");
});

$(document).on("click", ".close-action", function () {
  $(".map-overlay").removeClass("is-active");
  $("html").removeClass("popup");
  $("body").removeClass("popup");
});

$.validator.messages.required = '';
$.validator.messages.email = '';

$(document).ready(function () {

  $('#contact-form').validate({ // initialize the plugin
    highlight: function(element, errorClass, validClass) {
      $(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).closest('.form-control').addClass(validClass).removeClass(errorClass);
    },
    rules: {
      fullname: {
        required: true,
      },
      email: {
        required: true,
        email: true
      },
      phone: {
        required: true,
      },
      message: {
        required: true,
      }
    },
    messages: {
      fullname: "Please enter your name.",
      email: {
        required: "Please enter your email.",
        email: 'Please enter valid email.'
      },
      phone: "Please enter your phone number.",
      message: "Please enter your message."
    },
    submitHandler: function (form) {
      var name = $("#fullname").val();
      var email = $("#email").val();
      var tel = $("#phone").val();
      var message = $("#message").val();
      var verify = $("#verify").val();
      var lang = $("#lang").val();
      if (lang == "th") {
        var success_msg = "เธชเนเธเธเนเธญเธเธงเธฒเธกเน€เธฃเธตเธขเธเธฃเนเธญเธขเนเธฅเนเธง";
        var error_msg = "เน€เธเธดเธ”เธเนเธญเธเธดเธ”เธเธฅเธฒเธ” เธเธฃเธธเธ“เธฒเธฅเธญเธเนเธซเธกเนเธญเธตเธเธเธฃเธฑเนเธ";
      } else {
        var success_msg = "Your message has been sent.";
        var error_msg = "An error occured, please try again later.";
      }
      $("html").addClass("popup");
      $("body").addClass("popup");
      $("#messaging").addClass("is-active");
      $.ajax({
        type: 'POST',
        url: 'mail.php',
        data: {
          'name': name,
          'email': email,
          'tel': tel,
          'message': message,
          'verify': verify
        },
        success: function(msg){
          setTimeout(function () {
            $("#message-alert").html(success_msg);
            $("#success_btn").show();
            document.getElementById('contact-form').reset();
          }, 100);
        },
        error: function(msg) {
          setTimeout(function () {
            $("#message-alert").html(error_msg);
            $("#fail_btn").show();
          }, 100);
        }
      });
      return false; // for demo
    }
  });

});
var headerheight = document.getElementById("header").offsetHeight;

$('.nav-anchor').on('click', function() {

  var scrollAnchor = $(this).data('scroll'),
  scrollPoint = $('*[data-anchor="' + scrollAnchor + '"]').offset().top;
  $('body,html').animate({
    scrollTop: scrollPoint - headerheight
  }, 800);

  return false;

});

$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    $('.scroll-content').each(function(i) {
      if ($(this).position().top - (headerheight * 5) <= windscroll) {
        $('.nav-anchor').removeClass('is-active');
        $('.nav-anchor').eq(i).addClass('is-active');
      } else {
        $('.nav-anchor').eq(i).removeClass('is-active');
      }
    });

  }).scroll();

var iScrollPos = 0;
$(window).scroll(function() {
  var iCurScrollPos = $(this).scrollTop();
  var riverWalk = iCurScrollPos / 8;
  $(".riverwalk-inner").css({transform: "translateY(" + riverWalk +"px)"});
  $(".riverwalk-inner1").css({transform: "translateY(" + riverWalk +"px)"});
  iScrollPos = iCurScrollPos;
  
});

$(function(){

  var $window = $(window);
  var scrollTime = 0.4;
  var scrollDistance = 200;

  $window.on("mousewheel DOMMouseScroll", function(event){

    event.preventDefault();

    var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
    var scrollTop = $window.scrollTop();
    var finalScroll = scrollTop - parseInt(delta*scrollDistance);

    TweenMax.to($window, scrollTime, {
      scrollTo : { y: finalScroll, autoKill:true },
      ease: Power1.easeOut,
      overwrite: 5
    });

  });
});

$(document).on('click', '.hamburger', function () {
  $(this).toggleClass('is-active');
  $('.nav-right').toggleClass('is-active');
  $('.overlay').toggleClass('is-active');
  $('html').toggleClass('popup');
});

$(document).on('click', '.overlay.is-active', function () {
  $(this).toggleClass('is-active');
  $('.nav-right').toggleClass('is-active');
  $('html').toggleClass('popup');
  $('.hamburger').toggleClass('is-active');
});

$('.nav-click').on('click', function () {
  setTimeout(function () {
    //$('html').toggleClass('popup');
    $('.nav-right').toggleClass('is-active');
    $('.overlay').toggleClass('is-active');
    $('.hamburger').toggleClass('is-active');
  }, 500);
});


/*var img = new Image();
img.onload = function () {
   alert("image is loaded");
}
img.src = "../images/school_full/Bgsc.png";*/