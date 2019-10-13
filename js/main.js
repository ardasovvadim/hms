// document.onscroll(my_f);
$("body").mousedown(function (e) {
    // alert("scroll!");
    $(".position-xy>#x").text(window.scrollX);
    $(".position-xy>#y").text(window.scrollY);
});


var target = $('mark');
target.each(function () {
    var targetPos = target.offset().top;
    var winHeight = $(window).height();
    var scrollToElem = targetPos - winHeight;
});
$(window).scroll(function(){
    var winScrollTop = $(this).scrollTop();
    if(winScrollTop > scrollToElem+50){
        target.addClass("animate");
    }
});

