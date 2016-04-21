$(function() {
    var $menu = $(".spMenu");
    var $open = $(".openBtn");
    var $close = $(".closeBtn");
    $(".menuBtn").on("click",function() {
        if($menu.is(":hidden")) {
            $menu.slideDown()
            $close.fadeIn(100)
            $open.fadeOut(100)
        } else {
            $menu.slideUp()
            $close.fadeOut(100)
            $open.fadeIn(100)
        }
    });
});

$(function() {
    var $menu = $(".catMenu");
    $(".catBtn").on("click",function() {
        if($menu.is(":hidden")) {
            $menu.fadeIn()
        } else {
            $menu.fadeOut()
        }
    });
});

$(function() {
    var $menu = $(".spMenu2");
    var $close = $(".closeBtn2");
    var $menus = $(".spMenu3,.spMenu4");
    var $closes = $(".closeBtn3,.closeBtn4");
    $(".menuBtn2").on("click",function() {
        $menus.fadeOut(100)
        $closes.fadeOut(100)
        if($menu.is(":hidden")) {
            $menu.slideDown()
            $close.fadeIn(100)
        } else {
           
            $menu.slideUp()
            $close.fadeOut(100)
        }
    });
});

$(function() {
    var $menu = $(".spMenu3");
    var $close = $(".closeBtn3");
    var $menus = $(".spMenu2,.spMenu4");
    var $closes = $(".closeBtn2,.closeBtn4");
    $(".menuBtn3").on("click",function() {
        $menus.fadeOut(100)
        $closes.fadeOut(100)
        if($menu.is(":hidden")) {
            $menu.slideDown()
            $close.fadeIn(100)
        } else {
            $menu.slideUp()
            $close.fadeOut(100)
        }
    });
});

$(function() {
    var $menu = $(".spMenu4");
    var $close = $(".closeBtn4");
    var $menus = $(".spMenu2,.spMenu3");
    var $closes = $(".closeBtn2,.closeBtn3");
    $(".menuBtn4").on("click",function() {
        $menus.fadeOut(100)
        $closes.fadeOut(100)
        if($menu.is(":hidden")) {
            $menu.slideDown()
            $close.fadeIn(100)
        } else {
            $menu.slideUp()
            $close.fadeOut(100)
        }
    });
});



