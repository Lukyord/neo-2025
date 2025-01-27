//Show scroll-bar when content text is being scrolled
document.addEventListener("DOMContentLoaded", function () {
  const contentContainerEL = document.getElementById("about-content");
  const contentTextEL = document.querySelectorAll(".year-lists");

  contentTextEL.forEach(function (element) {
    if (element.scrollHeight > contentContainerEL.clientHeight) {
      element.classList.remove("invisible-scrollbar");
    } else {
      element.classList.add("invisible-scrollbar");
    }
  });
});

//SLIDER(AUTO) with THUMBS
jQuery(function ($) {
  if ($("#about").length) {
    var _this = $(this);

    //CONTROLS
    var slideButtonNext = _this.find(".swiper-button-next")[0],
      slideButtonPrev = _this.find(".swiper-button-prev")[0];

    //MODULES
    var slideCentered = _this.hasClass("centered"),
      slideCenteredMobile = _this.hasClass("centered-m"),
      slideCenterInsufficient = _this.hasClass("insufficient"),
      slideLoop = _this.hasClass("loop"),
      slideAutoplay = _this.hasClass("autoplay"),
      slideClicked = _this.hasClass("clicked"),
      slidePause = _this.hasClass("pause");

    var mouseWheelControl = _this.hasClass("mousewheel-control");

    //CHECK
    var slideTotal = _this.find(".swiper.thumb").find(".swiper-slide").length;

    //THUMBS
    var slideControl = _this.find(".swiper.thumbnail");
    var swiperThumbs = new Swiper(slideControl[0], {
      resistanceRatio: 0,
      slidesPerView: "auto",
      spaceBetween: 0,
      grabCursor: true,
      freeMode: true,
      watchSlidesProgress: true,
      slideToClickedSlide: true,
      mouseWheelControl: true,
    });

    //SLIDES
    const swiperSlides = _this.find(".swiper.thumb");
    const swiper = new Swiper(swiperSlides[0], {
      //resistanceRatio: 0,
      spaceBetween: 0,
      grabCursor: true,
      navigation: {
        nextEl: slideButtonNext,
        prevEl: slideButtonPrev,
      },
      effect: "fade",
      loop: slideLoop && slideTotal > 1,
      speed: 1400,
      longSwipesMs: 1400,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      slidesPerView: "auto",
      centeredSlides: slideCenteredMobile,
      centerInsufficientSlides: slideCenterInsufficient,
      slideToClickedSlide: slideClicked,
      watchSlidesProgress: true,
      watchSlidesVisibility: true,
      mousewheel: mouseWheelControl
        ? {
            invert: false,
            forceToAxis: true,
            sensitivity: 1,
          }
        : false,
      breakpoints: {
        992: {
          centeredSlides: slideCentered,
        },
      },
      init: false,
      thumbs: {
        swiper: swiperThumbs,
      },
      on: {
        slideChange: () =>
          setTimeout(() => {
            $(".swiper-slide-active .year-lists").scrollTop(0);
            $("#about-content").scrollTop(0);
          }, 350),
      },
    });

    setTimeout(function () {
      swiper.init();
      swiper.autoplay.stop();

      if (slideAutoplay) {
        if ($("html").hasClass("page-loading-html")) {
          var timer = setInterval(function () {
            if ($("html").hasClass("loading-completed")) {
              swiper.autoplay.start();
              clearInterval(timer);
            }
          }, 100);
        } else {
          swiper.autoplay.start();
        }
      }

      if (slidePause) {
        _this
          .mouseenter(function () {
            swiper.autoplay.stop();
          })
          .mouseleave(function () {
            swiper.autoplay.start();
          });
      }
    }, 100);

    swiper.on("slideChange", function () {
      var activeIndex = this.activeIndex + 1;
      var nextIndex = activeIndex + 1;
      var prevIndex = activeIndex - 1;
      var activeSlide = slideControl.find(
        ".swiper-slide:nth-child(" + activeIndex + ")"
      );
      var nextSlide = slideControl.find(
        ".swiper-slide:nth-child(" + nextIndex + ")"
      );
      var prevSlide = slideControl.find(
        ".swiper-slide:nth-child(" + prevIndex + ")"
      );

      if (nextSlide && !nextSlide.hasClass("swiper-slide-visible")) {
        this.thumbs.swiper.slideNext();
      } else if (prevSlide && !prevSlide.hasClass("swiper-slide-visible")) {
        this.thumbs.swiper.slidePrev();
      }

      activeSlide.find("tab");
    });

    if (slideTotal < 2) {
      sliderButtonPrev.hide();
      sliderButtonNext.hide();
    }
  }
});
