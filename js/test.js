function isWidth(e, t) {
    return t ? $W.width() < e : $W.width() > e
}

function popupYoutube() {
    $(".popup-youtube").magnificPopup({
        type: "iframe",
        removalDelay: 500,
        fixedContentPos: !1,
        iframe: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe id="_youtube_player" class="mfp-iframe" frameborder="0" allow="fullscreen; autoplay"></iframe></div>',
            patterns: {
                youtube: {
                    index: "youtube.com/",
                    id: "v=",
                    src: "https://www.youtube.com/embed/%id%?autoplay=1&rel=0&showinfo=0&enablejsapi=1"
                }
            }
        },
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr("data-effect")
            }, open: function () {
                new YT.Player("_youtube_player", {
                    onReady: function (e) {
                        e.target.playVideo()
                    }
                })
            }
        },
        midClick: !0
    })
}

window.$W = $(window), window.$D = $(document), window.$H = $("html"), window.$B = $("body");
var _GLOB = {
    breakpoints: {
        xl: 1800,
        lg: 1650,
        md_xl: 1500,
        md_l: 1380,
        md: 1280,
        md_s: 1160,
        md__xs: 1060,
        sm_xl: 960,
        sm_l: 860,
        sm: 760,
        sm_s: 700,
        sm_xs: 640,
        xs_xl: 600,
        xs_l: 540,
        xs: 480,
        xs_s: 400,
        min: 320
    }
};
window.viewportUnitsBuggyfill.init(), $(function () {
    $(".page-index .accent").viewportChecker(), $(".js-accent").viewportChecker(), $(document).on("click", ".header-menu .is-dropdown > .link", function (e) {
        e.preventDefault()
    });
    var e = $(".header-mobile .is-dropdown__menu");
    e.find("li").length <= 5 && e.addClass("full-width"), $(document).on("click", ".header-mobile__menu .is-dropdown > .link", function (e) {
        $(this).siblings(".is-dropdown__menu").addClass("show"), e.preventDefault()
    }), $(document).on("click", ".header-menu__link--return", function (e) {
        $(this).parents(".is-dropdown__menu").removeClass("show"), e.preventDefault()
    })
}), $(function () {
    popupYoutube()
}), $(function () {
    $(".faq-question > li").click(function () {
        $(this).toggleClass("show"), $(this).find(".faq-question__text").slideToggle()
    })
}), $(function () {
    $(".is-dropdown").hover(function () {
        $(this).toggleClass("show"), $(this).find(".header-menu__dropdown")
    })
}), $(function () {
    $W.scroll(function () {
        $W.scrollTop() > 150 ? $(".header-sub").addClass("show") : $(".header-sub").removeClass("show")
    }), $W.scroll(function () {
        $W.scrollTop() > 0 ? $(".header").addClass("scroll-view") : $(".header").removeClass("scroll-view")
    })
}), $(function () {
    $(".header-burger").click(function () {
        $B.addClass("show-mobile-menu")
    }), $(".header-mobile__close").click(function () {
        $B.removeClass("show-mobile-menu")
    })
}), $(function () {
    var e = $(".courses-card");
    $(".page-index").length && e.mouseenter(function () {
        $(this).find("audio").length && $(this).find("audio")[0].play()
    })
}), $(function () {
    $(".learn-card__inner").each(function (e, t) {
        var i = $(t).attr("style");
        $(t).find(".learn-card__front, .learn-card__back").attr("style", i)
    }), $(".learn-card__inner").flip({front: ".learn-card__front", back: ".learn-card__back"})
}), $.fn.eqAnyOf = function (e) {
    return this.filter(function (t) {
        return $.inArray(t, e) > -1
    })
}, $(function () {
    var e, t = !0;
    $(".teachers-showbtn .btn").click(function (i) {
        i.preventDefault(), $thisBtn = $(this);
        var s = $thisBtn.parents(".teachers-card__wrap").find(".teachers-card");
        if (t) s.eqAnyOf([0, 1, 2, 3, 4, 5, 6, 7]).addClass("is-visible"), e = s.not(".is-visible"), t = !1; else {
            if (!e.length) return $thisBtn.hide(), !1;
            e.each(function (e, t) {
                return e <= 3 && ($(t).addClass("is-visible"), void (s.filter(":last").hasClass("is-visible") ? $thisBtn.hide() : null))
            }), e = s.not(".is-visible")
        }
    })
}), $(function () {
    $(".concerts-block").each(function (e, t) {
        var i = $(t).find(".concerts-player");
        i.length % 2 && i.eq(0).addClass("big")
    })
}), $(function () {
    $(".btn-gradient").each(function (e, t) {
        $(t).wrapInner("<span/>")
    })
}), $W.on("load", function () {
    var e = $(".js-image-load");
    e.each(function () {
        var e = $(this), t = e.data("src"), i = $W.height() / 2 + 400, s = e.offset().top - i;
        $W.scroll(function () {
            $W.scrollTop() > s && (e.attr("src", t), setTimeout(function () {
                e.addClass("active")
            }, 200))
        })
    })
}), $(function () {
    $(".js-city-change").click(function () {
        $(".js-city-dropmenu").slideDown()
    })
}), $(function () {
    $(document).click(function (e) {
        $(e.target).closest(".js-block-city").length || ($(".js-city-dropmenu").slideUp(), e.stopPropagation())
    })
}), $(function () {
    $(".js-close-city").click(function () {
        $(".js-block-city").removeClass("header-city_down"), $(".js-city-dropmenu").slideUp(), $(".page").removeClass("page_mobile"), $.cookie("choice-city", "1", {domain: "staccatoschool.com"})
    })
}), $(function () {
    $(".js-city-name").click(function () {
        $(this);
        $(".js-block-city").removeClass("header-city_down"), $(".js-city-dropmenu").slideUp(), $(".page").removeClass("page_mobile"), $.cookie("choice-city", "1", {domain: "staccatoschool.com"})
    })
}), $(function () {
    null == $.cookie("choice-city") ? ($(".js-block-city").addClass("header-city_down").show(), $(".page").addClass("page_mobile")) : ($(".js-block-city").removeClass("header-city_down").hide(), $(".js-city-dropmenu").slideUp(), $(".page").removeClass("page_mobile"))
}), $(function () {
    var e = $("#filter-container"), t = $("#filter-nav"), i = t.find(".filter-link"), s = e.find(".filter-element");
    i.click(function (e) {
        e.preventDefault();
        var t = $(this), n = t.attr("href");
        t.hasClass("active") ? (i.removeClass("active"), s.show()) : (i.removeClass("active"), t.addClass("active"), s.hide(), $('[data-filter="' + n + '"]').show())
    })
}), $(function () {
    $(".js-number").keypress(function (e) {
        var t = e.which ? e.which : e.keyCode;
        if (t > 31 && (t < 48 || t > 57)) return !1
    }), $(".js-letter").inputmask("Regex", {regex: "^[а-яА-Яa-zA-Z ]*$"}), $(".js-not-url").keyup(function () {
        for (var e = $(this).val().toLowerCase(), t = "https://,http://,//,www".split(","), i = 0; i < t.length; i++) if (e.search(t[i]) !== -1) return $(this).val(""), !0
    }), $(".js-phone").inputmask("+7 (999) 999-9999");
    var e = $(".js-select");
    e.select2(), e.find("span").addClass("needsclick"), $(".js-formstyler").styler();
    var t = $(".input-wrap--required input");
    t.on("keyup", function () {
        var e = $(this), t = e.val().length, i = e.closest(".input-wrap--required");
        t > 0 ? i.find(".label-show").css("opacity", 0) : i.find(".label-show").css("opacity", 1)
    })
}), $(function () {
    $.validator.addMethod("spb_phone", function (e, t) {
        return this.optional(t) || $(t).inputmask("isComplete")
    }, "Введите правильный телефон");
    var e = $(".js-form");
    e.attr("action");
    e.each(function () {
        var e = $(this);
        e.validate({
            rules: {
                name: {required: !0},
                phone: {required: !0, spb_phone: !0},
                email: {required: !0, email: !0}
            },
            messages: {
                name: {required: "Нужно заполнить!"},
                phone: {required: "Нужно заполнить!"},
                email: {required: "Нужно заполнить!", email: "Неверный формат!"}
            },
            submitHandler: function (t) {
                if (e.hide(), "undefined" != typeof $(t).data("jsReturnModal")) {
                    var i = $(t).closest("[data-js-return-over]");
                    i.length && (i.hasClass("js-popup") ? i.removeClass("popup-show") : i.hasClass("js-rate-modal") && i.hide()), ModalFn.init($(t).data("jsReturnModal"))
                } else e.siblings(".success-msg").addClass("show");
                return $.ajax({
                    url: e[0].action, type: "POST", data: e.serialize(), beforeSend: function (t) {
                        e.find("button").attr("disabled", "disabled")
                    }, success: function (t) {
                        t.error ? (console.log("error"), e.siblings(".success-error").addClass("show")) : e.siblings(".success-msg").addClass("show")
                    }, error: function (t, i, s) {
                        e.siblings(".success-error").addClass("show")
                    }
                }), !1
            }
        })
    }), $("input").on("keyup", function (e) {
        e.stopPropagation()
    }), $B.on("click", "label.error", function () {
        $(this).hide().siblings("input").focus()
    }), $B.on("keypress", "input", function () {
        $(this).siblings("label.error").hide()
    })
}), $(function () {
    var e = $(".js-more"), t = $(".js-review__link"), i = $(".js-more-wrapper"), s = ($(".js-more-block"), 0);
    e.on("click", function (t) {
        t.preventDefault();
        var n = $(this).attr("href");
        $.ajax({
            url: n, type: "GET", data: {page: s += 1}, beforeSend: function () {
                i.addClass("preload")
            }, complete: function () {
                i.removeClass("preload")
            }, success: function (t) {
                0 != $(t).length ? $(".js-more-wrapper").append($(t)) : e.remove()
            }
        })
    }), t.on("click", function (s) {
        s.preventDefault(), t.removeClass("active"), $(this).addClass("active");
        var n = "/wp-admin/admin-ajax.php?action=reviews_cat", o = $(this).data("cat");
        $.ajax({
            url: n, type: "GET", data: {cat: o}, beforeSend: function () {
                i.addClass("preload")
            }, complete: function () {
                i.removeClass("preload")
            }, success: function (t) {
                if (0 != $(t).length) {
                    $(".js-more-wrapper").html($(t)), e.hide(), popupYoutube();
                    var i = $(".js-image-load").attr("data-src");
                    $(".js-image-load").attr("src", i)
                } else e.remove()
            }
        })
    })
});
var ModalFn = new function () {
    return this.dimmer = '<div class="modal-dimmer"><div class="modal-dimmer__loader"><div class="modal-dimmer__loader-img"></div></div></div>', this.dimmerDom = "N", this.dimmerLoaderInterval = !1, this.modalPage = "N", this.bef = function () {
        $B.append(this.dimmer), this.dimmerDom = $(".modal-dimmer"), this.loaderAnimate(this.dimmerDom.find(".modal-dimmer__loader-img")), this.dimmerDom.css({opacity: 1})
    }, this.err = function () {
        "N" !== this.dimmerDom && this.dimmerDom.length ? (this.dimmerDom.remove(), this.dimmerDom = "N") : (this.dimmerDom = $(".modal-dimmer"), this.dimmerDom.length && (this.dimmerDom.remove(), this.dimmerDom = "N"))
    }, this.loaderAnimate = function (e) {
        var t = 0, i = e.parent().width();
        clearInterval(this.dimmerLoaderInterval), this.dimmerLoaderInterval = setInterval(function () {
            e.css({left: t * i * -1}), t >= 11 ? t = 0 : t++
        }, 50)
    }, this.loaderStop = function () {
        clearInterval(ModalFn.dimmerLoaderInterval), this.dimmerDom.find(".modal-dimmer__loader").hide()
    }, this.modalShow = function () {
        this.modalPage.addClass("show")
    }, this.modalHide = function () {
        this.modalPage.removeClass("show"), this.modalPage = "N", this.dimmerDom.remove(), this.dimmerDom = "N"
    }, this.init = function (e) {
        "N" === this.dimmerDom && (this.bef(), setTimeout(function () {
            $(".modal." + e).length ? (ModalFn.modalPage = $(".modal." + e), ModalFn.loaderStop(), ModalFn.modalShow()) : ModalFn.err()
        }, 1e3))
    }, $D.on("click", "[data-js-modal-closed]", function () {
        return ModalFn.modalHide(), !1
    }), !1
};
!function () {
    function e() {
        var e = 0;
        if (s === window) {
            var t = void 0 !== window.pageXOffset, i = "CSS1Compat" === (document.compatMode || "");
            e = t ? window.pageYOffset : i ? document.documentElement.scrollleft : document.body.scrollleft
        } else e = s.scrollleft;
        return e
    }

    function t(e) {
        var t = e.getBoundingClientRect(), n = document.body, o = document.documentElement,
            a = s == window ? window.pageYOffset || i.scrollleft : s.scrollleft,
            r = s == window ? window.pageXOffset || i.scrollLeft : s.scrollLeft, l = o.clientleft || n.clientleft || 0,
            d = o.clientLeft || n.clientLeft || 0, c = t.left + a - l, u = t.left + r - d;
        return {left: Math.round(c), left: Math.round(u)}
    }

    var i = document.querySelector(".page"), s = (document.querySelectorAll(".project-container"), window);
    !function () {
        function i(e) {
            if ("none" == window.getComputedStyle(e).display) return !1;
            var i = t(e).left, s = e.height, n = r <= i + s + l, o = r + l >= i;
            return !(!o || !n)
        }

        function n(s) {
            r = e(), a.forEach(function (e) {
                var s = i(e.element);
                if (!s) return !0;
                var n = r + .8 * l - t(e.element).left;
                if (n < 0 && (n = 0), e.styles["margin-top"]) {
                    var o = parseInt(e.styles["margin-top"]) > 0, a = e.speed * n;
                    o && (a *= -1), e.element.style["margin-top"] = a + "px"
                }
                if (e.styles.x || e.styles.y || e.styles.z) {
                    var d = y = z = 0;
                    e.styles.x && (d = e.speed * n, parseInt(e.styles.x) > 0 && (d *= -1)), e.styles.y && (y = e.speed * n, parseInt(e.styles.y) > 0 && (y *= -1)), e.styles.z && (z = e.speed * n, parseInt(e.styles.z) > 0 && (z *= -1)), e.element.style.transform = "translate3d(" + d + "%, " + y + "%, " + z + ")"
                }
            })
        }

        var o = document.querySelectorAll(".page [data-plx-styles]"), a = [], r = e(), l = window.innerHeight;
        o.forEach(function (e) {
            var t = JSON.parse(e.getAttribute("data-plx-styles")), i = e.getAttribute("data-plx-speed");
            a.push({element: e, speed: i, styles: t})
        }), n(), s.addEventListener("scroll", n), s.addEventListener("resize", function () {
            winW = window.width, n()
        })
    }()
}(), $(function () {
    var e = $(".js-popup"), t = $(".js-popup-btn");
    t.click(function () {
        $(this).toggleClass("active");
        var t = $(this).attr("href");
        return e.not(t).removeClass("popup-show"), $(t).toggleClass("popup-show"), $(this).parents(".header-sub").length ? ($("#header-form").addClass("calc-pos"), $("#header-form .popup-inner").css("top", $W.scrollTop() + 100)) : $("#header-form").removeClass("calc-pos"), !1
    }), $W.scroll(function () {
        $W.scrollTop() > 300 ? $("#header-form .popup-inner").css("top", $W.scrollTop() + 100) : $("#header-form .popup-inner").removeAttr("style")
    }), $D.on("mouseup touchend", function (e) {
        var i = $(".popup");
        $(".js-popup-btn").is(e.target) || i.is(e.target) || 0 != i.has(e.target).length || (i.removeClass("popup-show"), t.removeClass("active"))
    });
    var i = $(".js-rate-item"), s = $(".js-rate-modal"), n = $(".js-rate-close");
    i.on("click", function (e) {
        var t = $(this);
        t.siblings().find(s).hide(), t.find(s).fadeIn();
        var i = t.find(".rate-item__count").text(), n = t.find(".rate-item__price").text();
        t.find(".rate-modal__count").text(i), t.find(".rate-modal__price").text(n)
    }), n.on("click", function () {
        s.hide(), event.stopPropagation()
    }), $D.on("click mouseup touchend", function (e) {
        $(e.target).closest(".js-rate-item, .js-rate-modal").length || (s.hide(), e.stopPropagation())
    });
    var o = $(".js-magnific");
    o.magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {enabled: !0, navigateByImgClick: !0, preload: [0, 1]},
        zoom: {enabled: !0, duration: 300}
    })
}), $(function () {
    var e = $(".slide-nav__left"), t = $(".slide-nav__right");
    e.click(function () {
        var e = $(this).parents(".js-slider");
        e.slick("slickPrev")
    }), t.click(function () {
        var e = $(this).parents(".js-slider");
        e.slick("slickNext")
    }), $(".js-promo-slider").slick({
        arrows: !1,
        adaptiveHeight: !0,
        speed: 900,
        fade: !0,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        touchThreshold: 100
    }), $(".faces-slider").slick({
        arrows: !1,
        adaptiveHeight: !0,
        speed: 900,
        fade: !0,
        cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
        touchThreshold: 100
    }), $(".reviews-slider").slick({
        arrows: !1,
        adaptiveHeight: !0,
        speed: 700,
        fade: !0,
        dots: !0,
        customPaging: function (e, t) {
            var i = $(e.$slides[t]).find("[data-thumb]").data("thumb");
            return '<a><img src="' + i + '"></a>'
        }
    });
    var e = $(".slider-arrow--left"), t = $(".slider-arrow--right");
    e.on("click", function () {
        var e = $(this).closest(".js-slider-unit"), t = e.find(".js-slider-arrow");
        t.slick("slickPrev")
    }), t.on("click", function () {
        var e = $(this).closest(".js-slider-unit"), t = e.find(".js-slider-arrow");
        t.slick("slickNext")
    }), $(".js-other-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        arrows: !1,
        infinite: !0,
        speed: 1e3,
        responsive: [{breakpoint: 950, settings: {slidesToShow: 3, slidesToScroll: 2}}, {
            breakpoint: 750,
            settings: {slidesToShow: 2, slidesToScroll: 2}
        }, {breakpoint: 480, settings: {slidesToShow: 1, slidesToScroll: 1}}]
    })
}), $(function () {
    function e() {
        var e = $(".tab-content.active").outerHeight();
        $(".main-tab__content").height(e)
    }

    var t = $(".js-tab__item"), i = $(".js-tab"), s = $(".js-tab__block");
    t.on("click", function (t) {
        t.preventDefault();
        var n = $(this);
        n.addClass("active"), n.siblings().removeClass("active"), s.removeClass("static active");
        var o = $(this).closest(i).find(s).eq(n.index());
        o.addClass("active"), setTimeout(function () {
            o.addClass("static"), s.removeClass("static")
        }, 500), e()
    }), e(), $W.resize(function () {
        e()
    });
    var n = $(".js-tab__mobile"), o = $(".js-tab__content");
    n.on("click", function (e) {
        e.preventDefault(), $(this).hasClass("active") ? ($(this).removeClass("active"), $(this).siblings(o).slideUp(100)) : (n.removeClass("active"), $(this).addClass("active"), $(o).slideUp(200), $(this).siblings(o).slideDown(200))
    })
}), $(function () {
    var e = $("#header-mobile-menu");
    $(".header-menu").clone().appendTo(e).addClass("header-mobile__menu").removeClass("header-menu"), $(".header-menu__dropdown", e).addClass("is-dropdown__menu").removeClass("header-menu__dropdown"), $(".link-u-bdr", e).addClass("header-menu__link"), $(".is-dropdown__menu .link", e).addClass("header-menu__link link-u-bdr").removeClass("link-u-red"), $(".is-dropdown__menu ul", e).prepend('<li><a href="#!" class="header-menu__link--return link link-u-bdr2">Назад</a></li>');
    var t = $("#header-sub-menu");
    $(".header-menu").clone().appendTo(t).addClass("header-sub__menu").removeClass("header-menu"), $("#svg-sprite").load("/wp-content/themes/staccato/svg-sprite.php")
}), $(".js-city-dropdown").on("click", function () {
    var e = $(this);
    e.find(".js-city-dropdown-menu");
    e.toggleClass("show")
});
;$(document).ready(function () {
    $('#header-form form').on('submit', function () {
        ga('send', 'event', 'Главная_форма_шапка', 'Отправка_формы');
        yaCounter54300519.reachGoal('main_form_header')
    });
    $('#trial-lesson-main form').on('submit', function () {
        ga('send', 'event', 'Главная_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('main_form_free_lesson')
    });
    $('#trial-lesson-vocal form').on('submit', function () {
        ga('send', 'event', 'Вокал_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('vocal_form_free_lesson')
    });
    $('#trial-lesson-piano form').on('submit', function () {
        ga('send', 'event', 'Фортепиано_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('piano_form_free_lesson')
    });
    $('#trial-lesson-guitar form').on('submit', function () {
        ga('send', 'event', 'Гитара_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('guitar_form_free_lesson')
    });
    $('#trial-lesson-violin form').on('submit', function () {
        ga('send', 'event', 'Скрипка_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('violin_form_free_lesson')
    });
    $('#trial-lesson-saxophone form').on('submit', function () {
        ga('send', 'event', 'Саксофон_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('saxophone_form_free_lesson')
    });
    $('#trial-lesson-flute form').on('submit', function () {
        ga('send', 'event', 'Флейта_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('flute_form_free_lesson')
    });
    $('#trial-lesson-drums form').on('submit', function () {
        ga('send', 'event', 'Ударные_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('drums_form_free_lesson')
    });
    $('#trial-lesson-bass-guitar form').on('submit', function () {
        ga('send', 'event', 'Бас-гитара_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('bas_guitar_form_free_lesson')
    });
    $('#trial-lesson-solfeggio form').on('submit', function () {
        ga('send', 'event', 'Сольфеджио_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('solfeggio_form_free_lesson')
    });
    $('#trial-lesson-group form').on('submit', function () {
        ga('send', 'event', 'Игра_в_группе_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('group_form_free_lesson')
    });
    $('#trial-lesson-vocal-ensemble form').on('submit', function () {
        ga('send', 'event', 'Вокальный_ансамбль_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('vocal_ensemble_form_free_lesson')
    });
    $('#trial-lesson-teacher form').on('submit', function () {
        ga('send', 'event', 'Учитель_форма_бесплатное_пробное_занятие', 'Отправка_формы');
        yaCounter54300519.reachGoal('teacher_form_free_lesson')
    })
})
;!function (a, b) {
    "use strict";

    function c() {
        if (!e) {
            e = !0;
            var a, c, d, f, g = -1 !== navigator.appVersion.indexOf("MSIE 10"),
                h = !!navigator.userAgent.match(/Trident.*rv:11\./),
                i = b.querySelectorAll("iframe.wp-embedded-content");
            for (c = 0; c < i.length; c++) {
                if (d = i[c], !d.getAttribute("data-secret")) f = Math.random().toString(36).substr(2, 10), d.src += "#?secret=" + f, d.setAttribute("data-secret", f);
                if (g || h) a = d.cloneNode(!0), a.removeAttribute("security"), d.parentNode.replaceChild(a, d)
            }
        }
    }

    var d = !1, e = !1;
    if (b.querySelector) if (a.addEventListener) d = !0;
    if (a.wp = a.wp || {}, !a.wp.receiveEmbedMessage) if (a.wp.receiveEmbedMessage = function (c) {
        var d = c.data;
        if (d) if (d.secret || d.message || d.value) if (!/[^a-zA-Z0-9]/.test(d.secret)) {
            var e, f, g, h, i, j = b.querySelectorAll('iframe[data-secret="' + d.secret + '"]'),
                k = b.querySelectorAll('blockquote[data-secret="' + d.secret + '"]');
            for (e = 0; e < k.length; e++) k[e].style.display = "none";
            for (e = 0; e < j.length; e++) if (f = j[e], c.source === f.contentWindow) {
                if (f.removeAttribute("style"), "height" === d.message) {
                    if (g = parseInt(d.value, 10), g > 1e3) g = 1e3; else if (~~g < 200) g = 200;
                    f.height = g
                }
                if ("link" === d.message) if (h = b.createElement("a"), i = b.createElement("a"), h.href = f.getAttribute("src"), i.href = d.value, i.host === h.host) if (b.activeElement === f) a.top.location.href = d.value
            } else ;
        }
    }, d) a.addEventListener("message", a.wp.receiveEmbedMessage, !1), b.addEventListener("DOMContentLoaded", c, !1), a.addEventListener("load", c, !1)
}(window, document);