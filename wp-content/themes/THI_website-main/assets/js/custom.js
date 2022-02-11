/**
 * Custom js v1.0.0
 * Copyright 2017-2020
 * Licensed under  ()
 */

 (function ($) {
  "use strict";

  let timer_clear;

  $(document).ready(function () {
    /* Start back top */
    $("#back-top").on("click", function (e) {
      e.preventDefault();
      $("html").scrollTop(0);
    });
    /* End back top */

    /* btn mobile Start*/
    let subMenuToggle = $(".sub-menu-toggle");

    if (subMenuToggle.length) {
      subMenuToggle.each(function () {
        $(this).on("click", function () {
          const widthScreen = $(window).width();

          if (widthScreen < 992) {
            $(this).toggleClass("active");
            $(this)
              .closest(".menu-item-has-children")
              .siblings()
              .find(subMenuToggle)
              .removeClass("active");
            $(this).parent().children(".sub-menu").slideToggle();
            $(this)
              .parents(".menu-item-has-children")
              .siblings()
              .find(".sub-menu")
              .slideUp();
          }
        });
      });
    }
    /* btn mobile End */

    /* Start Gallery Single */
    $(document).general_owlCarousel_custom(".site-post-slides");
    /* End Gallery Single */
  });

  // loading
  $(window).on("load", function () {
    $("#site-loadding").remove();
  });

  // scroll event
  $(window).scroll(function () {
    if (timer_clear) clearTimeout(timer_clear);

    timer_clear = setTimeout(function () {
      /* Start scroll back top */
      let $scrollTop = $(this).scrollTop();

      if ($scrollTop > 200) {
        $("#back-top").addClass("active_top");
      } else {
        $("#back-top").removeClass("active_top");
      }
      /* End scroll back top */
    }, 100);
  });

  // function call owlCarousel
  $.fn.general_owlCarousel_custom = function (class_item) {
    let class_item_owlCarousel = $(class_item);

    if (class_item_owlCarousel.length) {
      class_item_owlCarousel.each(function () {
        let slider = $(this);

        if (!slider.hasClass("owl-carousel-init")) {
          let defaults = {
            autoplaySpeed: 800,
            navSpeed: 800,
            dotsSpeed: 800,
            autoHeight: false,
            navText: [
              '<i class="fa fa-angle-left" aria-hidden="true"></i>',
              '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            ],
          };

          let config = $.extend(defaults, slider.data("settings-owl"));

          slider.owlCarousel(config).addClass("owl-carousel-init");
        }
      });
    }
  };

  // Control translate timeline
  function getTranslateX(obj) {
    var style = window.getComputedStyle(obj);
    var matrix = new WebKitCSSMatrix(style.transform);
    return matrix.m41;
  }
  function getWidth(obj) {
    return obj.offsetWidth;
  }
  $("#btn-timeline-next").click(function () {
    var obj = document.getElementById("horizontal-timeline-items");
    var transform_value_x = getTranslateX(obj);
    console.log(-transform_value_x);
    console.log(getWidth(obj) - 1680);

    $("#btn-timeline-prev").removeClass("d-none");
    if (-transform_value_x < getWidth(obj) - 1680) {
      transform_value_x -= 1680;
      $("#horizontal-timeline-items").css(
        "transform",
        "translateX(" + transform_value_x + "px)"
      );
      if (-transform_value_x > getWidth(obj) - 1680) {
        $("#btn-timeline-next").addClass("d-none");
      }
    }
  });
  $("#btn-timeline-prev").click(function () {
    var obj = document.getElementById("horizontal-timeline-items");
    var transform_value_x = getTranslateX(obj);

    $("#btn-timeline-next").removeClass("d-none");
    if (transform_value_x != 0) {
      transform_value_x += 1680;
      $("#horizontal-timeline-items").css(
        "transform",
        "translateX(" + transform_value_x + "px)"
      );
      if (transform_value_x == 0) {
        $("#btn-timeline-prev").addClass("d-none");
      }
    }
  });

  //-- Business RE --
  var multipleCardCarousel = document.querySelector("#carouselExampleControls");
  if (window.matchMedia("(min-width: 768px)").matches) {
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false,
    });
    var carouselWidth = $(".carousel-inner")[0].scrollWidth;
    var cardWidth = $(".carousel-item").width();
    var scrollPosition = 0;
    $("#carouselExampleControls .carousel-control-next").on(
      "click",
      function () {
        if (scrollPosition < carouselWidth - cardWidth * 4) {
          scrollPosition += cardWidth;
          $("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
          );
        }
      }
    );
    $("#carouselExampleControls .carousel-control-prev").on(
      "click",
      function () {
        if (scrollPosition > 0) {
          scrollPosition -= cardWidth;
          $("#carouselExampleControls .carousel-inner").animate(
            { scrollLeft: scrollPosition },
            600
          );
        }
      }
    );
  } else {
    $(multipleCardCarousel).addClass("slide");
  }
})(jQuery);
