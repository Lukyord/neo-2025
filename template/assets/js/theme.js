/* PAGE LOAD */
jQuery(function ($) {
  $("#page").imagesLoaded(function () {
    $(
      ".entry-content .wp-block-image:not(.alignfull):not(.alignwide) > img, table img"
    ).each(function () {
      $(this).css("width", $(this).attr("width"));
    });
  });

  // ANIMATE
  $(
    ".entry-fadeIn > *:not(:is(ul,ol,table)), .entry-fadeIn *:is(li,tr), .entry-fadeIn .wp-block-column > *"
  ).addClass("animate fadeIn");
  $(".entry-fadeIn .wp-block-image img").addClass("animate matrixZoomOut");

  $(
    ".entry-fadeInUp > *:not(:is(ul,ol)), .entry-fadeIn *:is(li), .entry-fadeIn .wp-block-column > *"
  ).addClass("animate fadeInUp");
  $(".entry-fadeInUp .wp-block-image img").addClass("animate matrixZoomOut");

  $(".accordion .animate").each(function () {
    $(this).removeClass("animate fadeIn");
  });

  function pageAnimate() {
    if ($(".animate").length) {
      var wow = new WOW({
        boxClass: "animate",
      });
      wow.init();
    }
  }
  pageAnimate();

  if ($("#highlight").length) {
    $("#page").addClass("highlight-enabled");
    if ($("#highlight").find("> .sc-billboard").hasClass("c-white")) {
      $("#page").addClass("header-white");
    } else {
      $("#page").removeClass("header-white");
    }
  }
});

/* WINDOW RESIZE */
jQuery(function ($) {
  function pageStyle() {
    if ($("#footer").length) {
      $("html").css("--footer-height", $("#footer").outerHeight() + "px");
    }
  }
  pageStyle();
  $(window).resize(function () {
    pageStyle();
  });

  //BG IMAGE
  function bgChange(Obj) {
    bgImg = $(Obj);
    bgImgSrc = $(Obj).data("bgimg-src");
    bgImgSrcset =
      typeof $(Obj).data("bgimg-srcset") != "undefined"
        ? $(Obj).data("bgimg-srcset")
        : "";

    var width = $(document).width();
    if (width < 992 && bgImgSrcset != "") {
      bgImg.css({ "background-image": "url(" + bgImgSrcset + ")" });
    } else {
      bgImg.css({ "background-image": "url(" + bgImgSrc + ")" });
    }
  }
  function bgChangeInit() {
    $(".bg-img").each(function () {
      var Obj = $(this);
      bgChange(Obj);
    });
  }
  bgChangeInit();
  $(window).resize(function () {
    bgChangeInit();
  });

  //VIDEO
  function vdoChange(Obj) {
    vdo = $(Obj);
    vdoSrc = $(Obj).data("vdo-src");
    vdoSrcset =
      typeof $(Obj).data("vdo-srcset") != "undefined"
        ? $(Obj).data("vdo-srcset")
        : "";

    var width = $(document).width();
    if (width < 992 && vdoSrcset != "") {
      vdo.attr("src", vdoSrcset);
    } else {
      vdo.attr("src", vdoSrc);
    }
  }
  function vdoChangeInit() {
    $(".vdojs").each(function () {
      var Obj = $(this);
      vdoChange(Obj);
    });
  }
  vdoChangeInit();
  //Detect window width change (not height change)
  var lastWidth = $(window).width();
  $(window).resize(function () {
    if ($(window).width() != lastWidth) {
      vdoChangeInit();
    }
  });
});

/* FORM */
jQuery(function ($) {
  $(".field").focusin(function () {
    $(this).siblings().removeClass("focusin");
    $(this).addClass("focusin");
  });

  //INPUT
  var formElement = $("input, textarea, select");
  formElement.focusin(function () {
    $(this).closest(".input").addClass("filled");
  });
  formElement.focusout(function () {
    if (!$(this).val()) {
      $(this).closest(".input").removeClass("filled");
    }
  });
  setTimeout(function () {
    formElement.each(function () {
      if ($(this).is(":-webkit-autofill")) {
        $(this).closest(".input").addClass("filled");
      } else {
        $(this).closest(".input").removeClass("filled");
      }
      if (!$(this).val()) {
        $(this).closest(".input").removeClass("filled");
      } else {
        $(this).closest(".input").addClass("filled");
      }
    });
  }, 100);

  //SELECT
  $(".fn").each(function () {
    $(this)
      .find("select")
      .addClass("select2")
      .wrapAll('<div class="select"></div>');
  });

  $(".select").each(function () {
    var selectParent = $(this),
      select = $(this).find(".select2"),
      select2fixed = $(this).find(".select2-fixed");

    var query = {};
    function markMatch(text, term) {
      var match = text.toUpperCase().indexOf(term.toUpperCase());

      var $result = $("<span></span>");

      if (match < 0) {
        return $result.text(text);
      }

      $result.text(text.substring(0, match));

      var $match = $('<span class="select2-rendered__match"></span>');
      $match.text(text.substring(match, match + term.length));

      $result.append($match);

      $result.append(text.substring(match + term.length));

      return $result;
    }

    select
      .select2({
        width: "100%",
        minimumResultsForSearch: -1,
        dropdownParent: selectParent,
        templateResult: function (item) {
          if (item.loading) {
            return item.text;
          }

          var term = query.term || "";
          var $result = markMatch(item.text, term);

          return $result;
        },
        language: {
          searching: function (params) {
            query = params;
            return "Searching...";
          },
        },
      })
      .on("select2:select", function (e) {
        selectParent.closest(".input").addClass("filled");
      })
      .on("select2:unselect", function (e) {
        selectParent.closest(".input").removeClass("filled");
      });

    select2fixed
      .select2({
        width: "100%",
        minimumResultsForSearch: -1,
        dropdownParent: selectParent,
        templateResult: function (item) {
          if (item.loading) {
            return item.text;
          }

          var term = query.term || "";
          var $result = markMatch(item.text, term);

          return $result;
        },
        language: {
          searching: function (params) {
            query = params;
            return "Searching...";
          },
        },
      })
      .on("select2:select", function (e) {
        selectParent.closest(".input").addClass("filled");
      })
      .on("select2:unselect", function (e) {
        selectParent.closest(".input").removeClass("filled");
      });

    select.closest(".select").addClass("select2-parent");
    select2fixed.closest(".select").addClass("select2-parent");

    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      select.select2("destroy");
      select.closest(".select").removeClass("select2-parent");
    }

    $(this)
      .find("select")
      .click(function () {
        if ($(this)[0].selectedIndex < 0) {
          selectParent.closest(".input").removeClass("filled");
        } else {
          selectParent.closest(".input").addClass("filled");
        }
      });
  });
});

/* UPLOAD FILE */
jQuery(function ($) {
  // Browser supports HTML5 multiple file?
  var multipleSupport = typeof $("<input/>")[0].multiple !== "undefined",
    isIE = /msie/i.test(navigator.userAgent);

  $.fn.customFile = function () {
    return this.each(function () {
      var _txtP;
      var _txtB;

      if (
        typeof $(this).closest(".custom-file-upload").data("placeholder") !=
        "undefined"
          ? $(this).closest(".custom-file-upload").data("placeholder")
          : ""
      ) {
        _txtP = $(this).closest(".custom-file-upload").data("placeholder");
      } else {
        _txtP = "";
      }

      if (
        typeof $(this).closest(".custom-file-upload").data("button") !=
        "undefined"
          ? $(this).closest(".custom-file-upload").data("button")
          : ""
      ) {
        var _txtB = $(this).closest(".custom-file-upload").data("button");
      } else {
        var _txtB = '<i class="ic ic-upload c-theme size-lg"></i> <span>';
      }

      var $file = $(this).addClass("custom-file-upload-hidden"),
        $wrap = $('<div class="file-upload-wrapper">'),
        $input = $(
          '<input type="text" class="file-upload-input" placeholder="' +
            _txtP +
            '" readonly />'
        ),
        $button = $(
          '<div class="file-upload-action"><button type="button" class="file-upload-button">' +
            _txtB +
            "</button></div>"
        ),
        $label = $(
          '<div class="file-upload-action"><label class="file-upload-button" for="' +
            $file[0].id +
            '">' +
            $(this).closest(".custom-file-upload").data("button") +
            "</label></div>"
        );

      $file.css({
        position: "absolute",
        left: "-9999px",
      });

      $wrap.insertAfter($file).append($file, $input, isIE ? $label : $button);

      $file.attr("tabIndex", -1);
      $button.attr("tabIndex", -1);

      $button.click(function () {
        $file.focus().click();
      });

      $input.click(function () {
        $file.focus().click();
      });

      $file.change(function () {
        var files = [],
          fileArr,
          filename;

        if (multipleSupport) {
          fileArr = $file[0].files;
          for (var i = 0, len = fileArr.length; i < len; i++) {
            files.push(fileArr[i].name);
          }
          filename = files.join(", ");
        } else {
          filename = $file.val().split("\\").pop();
        }

        $input.val(filename).attr("title", filename).focus();

        $input.closest(".input").addClass("filled");
      });

      $input.on({
        blur: function () {
          $file.trigger("blur");
        },
        keydown: function (e) {
          if (e.which === 13) {
            // Enter
            if (!isIE) {
              $file.trigger("click");
            }
          } else if (e.which === 8 || e.which === 46) {
            $file.replaceWith(($file = $file.clone(true)));
            $file.trigger("change");
            $input.val("");
          } else if (e.which === 9) {
            return;
          } else {
            return false;
          }
        },
      });
    });
  };

  // Old browser fallback
  if (!multipleSupport) {
    $(document).on("change", "input.customfile", function () {
      var _this = $(this),
        uniqId = "customfile_" + new Date().getTime(),
        $wrap = _this.parent(),
        $inputs = $wrap
          .siblings()
          .find(".file-upload-input")
          .filter(function () {
            return !this.value;
          }),
        $file = $(
          '<input type="file" id="' +
            uniqId +
            '" name="' +
            _this.attr("name") +
            '"/>'
        );

      setTimeout(function () {
        if (_this.val()) {
          if (!$inputs.length) {
            $wrap.after($file);
            $file.customFile();
          }
        } else {
          $inputs.parent().remove();
          $wrap.appendTo($wrap.parent());
          $wrap.find("input").focus();
        }
      }, 1);
    });
  }

  $("input[type=file]").customFile();
});

/* TAB */
jQuery(function ($) {
  var _windowHeight = $(window).outerHeight() / 4;

  _windowHeight = $("#header-height").outerHeight();

  function showTab(elem) {
    $(elem)
      .parents(".tab-container")
      .find(".tab-content")
      .removeClass("active");
    $(elem + ".tab-content").addClass("active");

    if ($(elem + ".tab-content").find(".animate").length) {
      new WOW({ boxClass: $(elem + ".tab-content").find(".animate") });
      $("html, body").animate({ scrollTop: $(window).scrollTop() + 1 });
    }

    if ($(elem).parents(".tab-container").hasClass("offset-sction")) {
      $("html,body").animate(
        { scrollTop: $(elem).closest("section").offset().top - _windowHeight },
        800
      );
    } else {
      $("html,body").animate(
        { scrollTop: $(elem).offset().top - _windowHeight },
        800
      );
    }
  }
  function selectDestroyMobile(Obj) {
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      Obj.select2("destroy");
      Obj.parent(".select").removeClass("select2-parent");
    }
  }
  var tabGroupParent = null;
  var Select2Options = null;
  $(".tab-container").each(function () {
    var obj = $(this);
    Select2Options = {
      width: "100%",
      minimumResultsForSearch: -1,
      dropdownParent: obj.find("select.tab-select2").parents(".select"),
    };

    var mySelect2 = obj.find("select.tab-select2");
    mySelect2.select2(Select2Options);
    mySelect2.parents(".select").addClass("select2-parent");
    selectDestroyMobile(mySelect2);
  });
  $(
    '.tab-container .tab a:not([data-redirect]):not([href="javascript:;"])'
  ).click(function (e) {
    var tabGroupParent = $(this).parents(".tab-container");
    var _id = $(this).attr("href");
    Select2Options.dropdownParent = tabGroupParent
      .find("select.tab-select2")
      .parents(".select");

    tabGroupParent.find(".tab a").removeClass("active");
    tabGroupParent
      .find("select option")
      .prop("selected", false)
      .removeAttr("selected");
    $(this).addClass("active");
    showTab(_id);
    tabGroupParent
      .find('select option[value="' + _id + '"]')
      .prop("selected", true)
      .attr("selected", true);
    tabGroupParent.find("select.tab-select2").select2("destroy");
    tabGroupParent.find("select.tab-select2").select2(Select2Options);
    selectDestroyMobile(tabGroupParent.find("select.tab-select2"));

    tabGroupParent
      .find(".select-value")
      .text(tabGroupParent.find("select option:selected", this).text());

    e.preventDefault();
  });
  $(".tab-container select.tab-select2").change(function () {
    $(this).parents(".tab-container");
    $(this).parents(".tab-container").find(".tab a").removeClass("active");
    $('.tab-container .tab a[href="' + $(this).val() + '"]').addClass("active");
    showTab($(this).val());
  });
  $(".control-dropdown").each(function () {
    var ele = $(this);
    ele
      .find(".select-value")
      .text(ele.find("select option:selected", this).text());
    ele.find("select").on("load change", function () {
      ele
        .find(".select-value")
        .text(ele.find("select option:selected", this).text());
    });
  });

  //TAB DATA
  $(".tabdata-container").each(function () {
    var tabDataGroupParent = $(this);

    function showTabData(elem) {
      tabDataGroupParent.find(".tabdata-content").removeClass("active");
      tabDataGroupParent
        .find(".tabdata-content" + "*[data-tab-id=" + elem + "]")
        .addClass("active");

      if (
        tabDataGroupParent.find(
          ".tabdata-content" + "*[data-tab-id=" + elem + "] .animate"
        ).length
      ) {
        new WOW({
          boxClass: tabDataGroupParent.find(
            ".tabdata-content" + "*[data-tab-id=" + elem + "] .animate"
          ),
        });
        $("html, body").animate({ scrollTop: $(window).scrollTop() + 1 });
      }

      $("html,body").animate(
        {
          scrollTop:
            tabDataGroupParent
              .find(".tabdata-content" + "*[data-tab-id=" + elem + "]")
              .offset().top - _windowHeight,
        },
        800
      );
    }

    tabDataGroupParent.find(".tabdata a").click(function (e) {
      var _id = $(this).data("tab-id");
      tabDataGroupParent.find(".tabdata a").removeClass("active");
      $(this).addClass("active");
      showTabData(_id);
      e.preventDefault();
    });
  });
});

/* ACCORDION */
jQuery(function ($) {
  $(".accordion-container").each(function () {
    $(this)
      .find(".accordion")
      .each(function () {
        var _this = $(this);
        var _parent = $(this).parent();

        var _windowHeight = $(window).outerHeight() / 4;

        _this.find("> .entry-title").click(function () {
          var _thisParent = $(this).parent();

          var neighbor = _thisParent.siblings(),
            neighborContent = neighbor.find("> .entry-panel");

          if (_parent.hasClass("toggle")) {
            neighbor.removeClass("active");
            neighborContent.slideUp(300);

            _thisParent.toggleClass("active");
            _thisParent.find("> .entry-panel").slideToggle(300);

            setTimeout(function () {
              if (_thisParent.find("> .entry-panel").is(":visible")) {
                _parent.animate(
                  {
                    scrollTop: _thisParent.offset().top - _windowHeight,
                  },
                  800
                );
              }
            }, 350);
          } else {
            _thisParent.toggleClass("active");
            _thisParent.find("> .entry-panel").slideToggle(300);
          }
        });
      });

    if ($(this).hasClass("trigger-first")) {
      $(this).find("> .accordion:first-child").addClass("active");
      $(this).find("> .accordion:first-child > .entry-panel").show();
    }
  });
});

/* LOCATION HASH */
jQuery(function ($) {
  setTimeout(function () {
    var _windowHeight = $(window).outerHeight() / 4;

    if (window.location.hash) {
      $("html, body")
        .delay(100)
        .animate(
          {
            scrollTop: $(window.location.hash).offset().top - _windowHeight,
          },
          800
        );
    }
  }, 100);
});

/* LINK SCROLL */
jQuery(function ($) {
  $(".link-scroll").click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top - $("#header-height").outerHeight(),
          },
          800
        );
        return false;
      }
    }
  });
});

/* BACK TO TOP */
jQuery(function ($) {
  $("#backtotop").click(function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 800);
  });
});

/* SECTION */
jQuery(function ($) {
  if ($(".sc-menu.swiper").length) {
    $(".sc-menu.swiper").each(function () {
      var _this = $(this);

      //CONTROLS
      var slideButtonNext = _this.find(".swiper-button-next")[0],
        slideButtonPrev = _this.find(".swiper-button-prev")[0];

      //MODULES
      var slideCentered = _this.hasClass("centered"),
        slideCenterInsufficient = _this.hasClass("insufficient");

      //CHECK
      var slideTotal = _this.find(".swiper-slide").length;

      //INITIALIZE
      const swiper = new Swiper(_this[0], {
        resistanceRatio: 0,
        spaceBetween: 0,
        grabCursor: true,
        navigation: {
          nextEl: slideButtonNext,
          prevEl: slideButtonPrev,
        },
        effect: "slide",
        speed: 1200,
        longSwipesMs: 1200,
        slidesPerView: "auto",
        centeredSlides: slideCentered,
        centerInsufficientSlides: slideCenterInsufficient,
        slideToClickedSlide: true,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
      });

      if (_this.find(".swiper-slide.current-cat").length && slideTotal > 2) {
        _this.each(function () {
          var _current = $(this).find(".swiper-slide.current-cat").index() - 1;
          swiper.slideTo(_current, 0, false);
        });
      }

      if (_this.find(".swiper-slide.is-active").length && slideTotal > 2) {
        _this.each(function () {
          var _current = $(this).find(".swiper-slide.is-active").index() - 1;
          swiper.slideTo(_current, 0, false);
        });
      }

      if (_this.find(".swiper-slide > .active").length && slideTotal > 2) {
        _this.each(function () {
          var _current =
            $(this).find(".swiper-slide > .active").parent().index() - 1;
          swiper.slideTo(_current, 0, false);
        });
      }
    });
  }
});

/* VENDOR */
jQuery(function ($) {
  //SLIDER(DEFAULT)
  if ($(".swiper.default").length) {
    $(".swiper.default").each(function () {
      var _this = $(this);

      _this.find(".swiper-slide video[autoplay]").each(function () {
        $(this).get(0).pause();
        $(this).get(0).currentTime = 0;
      });

      //CONTROLS
      var slidePagination = _this.find(".swiper-pagination")[0],
        slideButtonNext = _this.find(".swiper-button-next")[0],
        slideButtonPrev = _this.find(".swiper-button-prev")[0];

      var slideButtonNextParent = $(this)
          .parents('*[class*="-slider"]')
          .find(".swiper-button-next")[0],
        slideButtonPrevParent = $(this)
          .parents('*[class*="-slider"]')
          .find(".swiper-button-prev")[0];

      //MODULES
      var slideFade = _this.hasClass("fade"),
        slideLoop = _this.hasClass("loop"),
        slideAutoplay = _this.hasClass("autoplay"),
        slidePause = _this.hasClass("pause");

      //CHECK
      var slideTotal = _this.find(".swiper-slide").length;

      //FUNCTION
      function switchColor() {
        if (_this.find(".swiper-slide").length) {
          if (_this.find(".swiper-slide-active").hasClass("c-white")) {
            setTimeout(function () {
              _this.closest('*[class*="type-slider"]').addClass("c-white");
            }, 200);
          } else {
            setTimeout(function () {
              _this.closest('*[class*="type-slider"]').removeClass("c-white");
            }, 200);
          }
        }

        if (_this.find(".swiper-slide > .sc-billboard").length) {
          if (
            _this
              .find(".swiper-slide-active > .sc-billboard")
              .hasClass("c-white")
          ) {
            setTimeout(function () {
              _this.addClass("c-white");

              if (_this.closest("#highlight").length) {
                $("#page").addClass("header-white");
              }
            }, 200);
          } else {
            setTimeout(function () {
              _this.removeClass("c-white");

              if (_this.closest("#highlight").length) {
                $("#page").removeClass("header-white");
              }
            }, 200);
          }
        }

        if (_this.find(".sc-billboard > .sc-cover .swiper-slide").length) {
          _this
            .find(".sc-billboard > .sc-cover .swiper-slide")
            .each(function () {
              var _slideParent = $(this).parents(".sc-cover");
              var _slideParents = $(this).parents(".sc-billboard");

              if (
                _slideParent.find(".swiper-slide-active").hasClass("c-white")
              ) {
                setTimeout(function () {
                  _slideParents.addClass("c-white");

                  if (_this.closest("#highlight").length) {
                    $("#page").addClass("header-white");
                  }
                }, 200);
              } else {
                setTimeout(function () {
                  _slideParents.removeClass("c-white");

                  if (_this.closest("#highlight").length) {
                    $("#page").removeClass("header-white");
                  }
                }, 200);
              }
            });
        }
      }

      function vdoData() {
        if (_this.find("video").length) {
          _this.find("video[autoplay]").each(function () {
            var vdo = $(this);
            vdo.get(0).preload = "metadata";
            vdo.get(0).onloadedmetadata = function () {
              var vdoTime = (vdo.get(0).duration - 2) * 1000;
              vdo
                .closest(".swiper-slide")
                .attr("data-swiper-autoplay", vdoTime);

              if ($(document).width() < 992) {
                _this
                  .find(".swiper-slide .visible-device-sm")
                  .each(function () {
                    if (!$(this).find("video[autoplay]").length) {
                      $(this)
                        .closest(".swiper-slide")
                        .attr("data-swiper-autoplay", "4000");
                    }
                  });
              } else {
                _this.find(".swiper-slide .hidden-device-sm").each(function () {
                  if (!$(this).find("video[autoplay]").length) {
                    $(this)
                      .closest(".swiper-slide")
                      .attr("data-swiper-autoplay", "4000");
                  }
                });
              }
            };
          });
        }
      }
      vdoData();

      //INITIALIZE
      const swiper = new Swiper(_this[0], {
        resistanceRatio: 0,
        spaceBetween: 0,
        pagination: {
          el: slidePagination,
          type: "bullets",
          clickable: true,
        },
        navigation: {
          nextEl: slideButtonNext || slideButtonNextParent,
          prevEl: slideButtonPrev || slideButtonPrevParent,
        },
        effect: slideFade ? "fade" : "slide",
        fadeEffect: {
          crossFade: slideFade,
        },
        loop: slideLoop && slideTotal > 1,
        speed: 1000,
        longSwipesMs: 1000,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        on: {
          init: function () {
            switchColor();
            vdoData();

            if (_this.find(".swiper-slide-active video[autoplay]").length) {
              _this
                .find(".swiper-slide-active video[autoplay]")
                .each(function () {
                  $(this).get(0).play();
                  $(this).get(0).currentTime = 0;
                });
            } else {
              _this
                .find('.swiper-slide:not(".swiper-slide-active") video')
                .each(function () {
                  $(this).get(0).pause();
                  $(this).get(0).currentTime = 0;
                });
            }
          },
          resize: function () {
            vdoData();
          },
        },
        init: false,
      });

      setTimeout(function () {
        swiper.init();
        vdoData();
        swiper.autoplay.stop();

        if (slideAutoplay) {
          if ($("html").hasClass("page-loading-html")) {
            var timer = setInterval(function () {
              if ($("html").hasClass("loading-completed")) {
                swiper.autoplay.start();
                clearInterval(timer);
                // console.log('clearInterval')
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

      swiper.on("slideChangeTransitionStart", function () {
        if (_this.find(".swiper-slide-active video[autoplay]").length) {
          _this.find(".swiper-slide-active video[autoplay]").each(function () {
            $(this).get(0).play();
            $(this).get(0).currentTime = 0;
          });
        }

        switchColor();
      });

      swiper.on("slideChangeTransitionEnd", function () {
        if (
          _this.find('.swiper-slide:not(".swiper-slide-active") video').length
        ) {
          _this
            .find('.swiper-slide:not(".swiper-slide-active") video')
            .each(function () {
              $(this).get(0).pause();
              $(this).get(0).currentTime = 0;
            });
        }
      });

      if (_this.hasClass("fix")) {
        _this
          .closest('*[class*="-slider"]')
          .find('*[class*="swiper-button-"]')
          .css("height", _this.find('[class*="object"]').outerHeight());
        $(window).resize(function () {
          _this
            .closest('*[class*="-slider"]')
            .find('*[class*="swiper-button-"]')
            .css("height", _this.find('[class*="object"]').outerHeight());
        });
      }
    });
  }

  //SLIDER(AUTO)
  if ($(".swiper.auto").length) {
    $(".swiper.auto").each(function () {
      var _this = $(this);

      //CONTROLS
      var slidePagination = _this.find(".swiper-pagination")[0],
        slideButtonNext = _this.find(".swiper-button-next")[0],
        slideButtonPrev = _this.find(".swiper-button-prev")[0];

      var slideButtonNextParent = $(this)
          .parents('*[class*="-slider"]')
          .find(".swiper-button-next")[0],
        slideButtonPrevParent = $(this)
          .parents('*[class*="-slider"]')
          .find(".swiper-button-prev")[0];

      //MODULES
      var slideCentered = _this.hasClass("centered"),
        slideCenteredMobile = _this.hasClass("centered-m"),
        slideCenterInsufficient = _this.hasClass("insufficient"),
        slideLoop = _this.hasClass("loop"),
        slideAutoplay = _this.hasClass("autoplay"),
        slideClicked = _this.hasClass("clicked"),
        slidePause = _this.hasClass("pause"),
        slideOffset = _this.hasClass("offset"),
        slideFade = _this.hasClass("fade-effect"),
        slideAutoHeight = _this.hasClass("auto-height"),
        slideAutoHeightMobile = _this.hasClass("auto-height-m");

      var mouseWheelControl = _this.hasClass("mousewheel-control");

      //CHECK
      var slideTotal = _this.find(".swiper-slide").length;

      //INITIALIZE
      const swiper = new Swiper(_this[0], {
        //resistanceRatio: 0,
        autoHeight: slideAutoHeightMobile,
        spaceBetween: 0,
        grabCursor: true,
        pagination: {
          el: slidePagination,
          type: "bullets",
          clickable: true,
        },
        navigation: {
          nextEl: slideButtonNext || slideButtonNextParent,
          prevEl: slideButtonPrev || slideButtonPrevParent,
        },
        effect: slideFade ? "fade" : "slide",
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
            autoHeight: slideAutoHeight,
          },
        },
        init: false,
        slidesOffsetBefore: slideOffset ? 150 : 0,
        slidesOffsetAfter: slideOffset ? 150 : 0,
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
                // console.log('clearInterval')
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

      swiper.on("transitionStart", function () {
        _this.parent().addClass("beginning");
      });

      swiper.on("slideChange", function () {
        const activeSlide = swiper.slides[swiper.activeIndex];
        const videos = activeSlide.querySelectorAll("video");

        videos.forEach((video) => {
          if (video.dataset.vdoSrc) {
            video.src = video.dataset.vdoSrc;
            video.load();
          }
          video.play();
        });

        swiper.slides.forEach((slide, index) => {
          if (index !== swiper.activeIndex) {
            const slideVideos = slide.querySelectorAll("video");
            slideVideos.forEach((video) => {
              video.pause();
              video.currentTime = 0; // Reset the video to the beginning
            });
          }
        });
      });

      if (_this.hasClass("fix")) {
        _this
          .closest('*[class*="-slider"]')
          .find('*[class*="swiper-button-"]')
          .css("height", _this.find('[class*="object"]').outerHeight())
          .addClass();
        $(window).resize(function () {
          _this
            .closest('*[class*="-slider"]')
            .find('*[class*="swiper-button-"]')
            .css("height", _this.find('[class*="object"]').outerHeight());
        });
      }
    });
  }

  //POPUP
  $(".open-popup-modal").magnificPopup({
    type: "inline",
    preloader: false,
    closeOnBgClick: true,
    mainClass: "popup-style popup-style-modal",
    showCloseBtn: false,
    removalDelay: 300,
    callbacks: {
      open: function () {
        $("html").addClass("plugin-mfp-enabled");
      },
      close: function () {
        $("html").removeClass("plugin-mfp-enabled");
      },
    },
  });
  $(".open-popup-image").magnificPopup({
    type: "image",
    preloader: false,
    closeOnBgClick: true,
    mainClass: "popup-style popup-style-modal",
    showCloseBtn: false,
    removalDelay: 200,
    image: {
      markup:
        '<div class="modal-ratio">' +
        '<a class="modal-dismiss" href="javascript:;"></a>' +
        '<div class="modal-cover">' +
        '<figure class="object">' +
        '<div class="mfp-img"></div>' +
        "</figure>" +
        "</div>" +
        "</div>",
    },
    callbacks: {
      open: function () {
        $("html").addClass("plugin-mfp-enabled");
      },
      close: function () {
        $("html").removeClass("plugin-mfp-enabled");
      },
    },
  });
  $(document).on("click", ".modal-dismiss, .modal-close", function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
});

/* VIDEO */
jQuery(function ($) {
  if ($(".wp-block-video").length) {
    $(".wp-block-video").each(function () {
      $(this).find("video").wrap('<div class="video"></div>');
    });
  }

  if ($(".video").length) {
    $(".video").each(function () {
      var _this = $(this);
      var vdo = $(this).find("video");
      var ctrlOverlaidPlay = $(this).find(".ctrls-overlaid .play");
      var ctrlOverlaidPause = $(this).find(".ctrls-overlaid .pause");

      $(this).find("video[autoplay]").parent().addClass("playing");

      ctrlOverlaidPlay.click(function () {
        vdo.get(0).play();
        _this.addClass("playing");
      });
      ctrlOverlaidPause.click(function () {
        vdo.get(0).pause();
        _this.removeClass("playing");
      });

      //FIX SAFARI
      if (!$(this).hasClass("hidden-ctrls")) {
        var _poster = vdo.attr("poster");
        if (typeof _poster !== "undefined" || _poster !== false) {
          vdo.css({ "background-image": 'url("' + vdo.attr("poster") + '")' });
        }
      }
    });
  }
});
document
  .querySelectorAll(".video video, .wp-block-video video")
  .forEach(function (item) {
    item.addEventListener("playing", function (e) {
      e.target.closest(".video").classList.add("playing");

      if (e.target.closest(".video").classList.contains("hidden-ctrls")) {
        e.target.removeAttribute("controls");
      } else {
        e.target.setAttribute("controls", "");
      }
    });

    item.addEventListener("pause", function (e) {
      e.target.closest(".video").classList.remove("playing");
      e.target.removeAttribute("controls");
    });

    item.addEventListener("ended", function (e) {
      e.target.closest(".video").classList.remove("playing");
      e.target.src = "";
      e.target.src = e.target.currentSrc;
      e.target.removeAttribute("controls");
    });
  });

/* HEADER&FOOTER */
jQuery(function ($) {
  //MENU CONTROL
  $(".header-menu-ctrl > .ctrl").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("header-menu-enabled");
    $(".header-menu-ctrl > .ctrl").toggleClass("active");
    $(".header-menu .panel-scroll").animate({ scrollTop: 0 });
  });

  $(".header-menu .link-scroll, .header-menu .panel-overlay").click(
    function () {
      $("html").removeClass("header-menu-enabled");
      $(".header-menu-ctrl > .ctrl").removeClass("active");
      $(".header-menu").removeClass("active");
      $(".header-menu .panel-scroll").animate({ scrollTop: 0 });
    }
  );
});

/* MAIN */
jQuery(function ($) {
  if ($("#navigation").length) {
    $("html").addClass("navigation-enabled");
  } else {
    $("html").removeClass("navigation-enabled");
  }

  $(".brand-container").each(function () {
    var _this = $(this);
    _this
      .find("> .brand-nav")
      .clone()
      .appendTo(_this)
      .addClass("marquee")
      .wrapInner('<div class="brand-marquee"></div>');

    var nav = _this.find("> .brand-nav:not(.marquee)");
    nav.addClass("prototype");

    var navMarquee = _this.find(".brand-marquee");
    navMarquee.liMarquee({ circular: true, startShow: true });
    navMarquee.liMarquee("stop");

    $(window).on(
      "load resize",
      debounce(function () {
        var cloneWidth = nav.width();
        var cloneChildWidth = nav.find("> ul").width();
        if (cloneChildWidth > cloneWidth) {
          _this.addClass("running");
          navMarquee.liMarquee("start", 500);
        } else {
          _this.removeClass("running");
          navMarquee.liMarquee("stop");
        }
      }, 200)
    ); // Adjust the delay (in milliseconds) as needed

    function debounce(func, wait) {
      var timeout;
      return function () {
        var context = this,
          args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function () {
          func.apply(context, args);
        }, wait);
      };
    }
  });
});
