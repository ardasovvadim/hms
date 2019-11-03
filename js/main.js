var targets = $('mark');
$(window).scroll(function () {
    targets.each(function () {
        var win_position = $(window).scrollTop() + $(window).height();
        var later = 200;
        win_position -= later;
        if (win_position > $(this).offset().top) {
            $(this).addClass('animate');
        }
    });

});

function recount_position_mGetCourse() {
    let target = $('#modal-get-course');
    target.css('top', 'auto');
    target.css('left', 'auto');
    target.css('right', 'auto');
    if(IS_FLOATING_HEADER) {
        target.css('position', 'fixed');
        let top = $('#header-floating').height() + 40;
        let right = 40;
        target.css('top', top);
        target.css('right', right);
    } else {
        target.css('position', 'absolute');
        let btn = $('.top-header .js-active-m-get-course');
        let top = btn.offset().top + btn.innerHeight() + 40;
        let left = btn.offset().left + btn.innerWidth() - target.width() - 40;
        target.css('top', top);
        target.css('left', left);
    }
}

$(window).scroll(function () {
    let target = $('#header-main');
    let h_float = $('#header-floating');
    if ($(window).scrollTop() >= target.height() && isDisplayNone(h_float)) {
        IS_FLOATING_HEADER = true;
        if (IS_ACTIVE_modal_get_course) recount_position_mGetCourse();
        h_float.slideDown();
    } else if ($(window).scrollTop() < target.height() && !isDisplayNone(h_float)) {
        IS_FLOATING_HEADER = false;
        if (IS_ACTIVE_modal_get_course) recount_position_mGetCourse();
        h_float.slideUp();
    }
});

function isDisplayNone(target) {
    return (target.css('display') === 'none');
}

$(".courses .card").hover(function () {
    let target = $(this);
    target.find('img').css('transform', 'scale(1.2)');
    target.find('h2').last().css('border-bottom-color', 'transparent')
}, function () {
    let target = $(this);
    target.find('img').css('transform', 'scale(1)');
    target.find('h2').last().css('border-bottom-color', '#FFDD10')
});

var IS_FLOATING_HEADER = false;
var IS_ACTIVE_modal_get_course = false;
$('.js-active-m-get-course').click(function () {
    let target = $('#modal-get-course');
    let value = target.css('display');
    if (value === 'none') {
        target.fadeIn();
        IS_ACTIVE_modal_get_course = true;
        recount_position_mGetCourse();
    } else {
        target.fadeOut();
        IS_ACTIVE_modal_get_course = false;
    }
});

$('.header-nav__dropdown').hover(function () {
    let target = $(this).find('.header-nav__dropdown-list');
    target.css('visibility', 'visible');
    target.css('opacity', '1');
}, function () {
    let target = $(this).find('.header-nav__dropdown-list');
    target.css('visibility', 'hidden');
    target.css('opacity', '0');
});
