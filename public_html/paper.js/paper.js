var menu__icon = document.getElementsByClassName('menu__icon')[0];
var hidden_menu = document.getElementsByClassName('hidden_menu')[0];

menu__icon.addEventListener('click', menu_open);

function menu_open() {
    hidden_menu.classList.toggle('menu_visible');
    document.documentElement.classList.toggle('no_scroll');
}

var header_burger_menu = document.getElementsByClassName("menu")[0];

menu__icon.addEventListener('click', function () {
    header_burger_menu.classList.toggle('menu_state_open');
})


window.onload = function () {
    var slider = tns({
        container: '.my-slider',
        items: 1,
        rewind: true,
        swipeAngle: false,
        gutter: 30,
        speed: 400,
        mouseDrag: true,
        controlsText: [" ", " "],
        controlsPosition: 'bottom',
        navPosition: 'bottom',
        navAsThumbnails: true,
        arrowKeys: true,
    })

    var slider = tns({
        container: '.news-slider',
        items: 1,
        rewind: true,
        swipeAngle: false,
        gutter: 30,
        speed: 400,
        mouseDrag: true,
        controlsText: [" ", " "],
        controlsPosition: 'bottom',
        navPosition: 'bottom',
        navAsThumbnails: true,
        arrowKeys: true,
    })

    var slider = tns({
        container: '.invisible-slider',
        items: 1,
        rewind: true,
        swipeAngle: false,
        gutter: 30,
        speed: 400,
        mouseDrag: true,
        controlsText: [" ", " "],
        controlsPosition: 'bottom',
        navPosition: 'bottom',
        navAsThumbnails: true,
        arrowKeys: true,
    })
}

window.addEventListener("scroll", throttleScroll, false);

var currentScrollTop = 0;
var animation_start = document.getElementsByClassName('animation_start')[0];
var progress_animation_item = document.getElementsByClassName('progress_animation_item')[0];
var diagram_group = document.getElementsByClassName('diagram_group');
var isScrolling = false;
var k = 0;

function throttleScroll(e) {
    if (isScrolling == false) {
        window.requestAnimationFrame(function () {
            scrolling(e);
            isScrolling = false;
        });
    }
}

document.addEventListener("DOMContentLoaded", scrolling, false);

function scrolling(e) {

    if (isPartiallyVisible(animation_start) & k == 0) {
        progress_animation_item.classList.add('market_progress_value');
        diagram_group[0].classList.add('market_progress__num_right');
        diagram_group[1].classList.add('market_progress__num_left');
        k++;
    }
}

function isPartiallyVisible(el) {
    var elementBoundary = el.getBoundingClientRect();

    var top = elementBoundary.top;
    var bottom = elementBoundary.bottom;
    var height = elementBoundary.height;

    return ((top + height >= 0) && (height + window.innerHeight >= bottom));
}


    var overlay = document.getElementsByClassName('overlay')[0];
    var invisible_slider = document.getElementsByClassName('hidden_slider')[0];
    var open_slider = document.getElementsByClassName('slider_trigger')[0];
    var close_btn = document.getElementById('close_btn_slider');
    var modal_btn = document.getElementById('modal_btn');
    var apply_modal = document.getElementsByClassName('modal_window_second')[0];
    var modal_trigger = document.getElementsByClassName('modal_trigger')[0];
    var modal_thanx_btn = document.getElementById('modal_thanx_btn');
    var close_btn_video = document.getElementById('close_btn_video');
    var hidden_video = document.getElementsByClassName('hidden_video')[0];
    var open_video = document.getElementsByClassName('circle_amimation_container')[0];

    open_slider.addEventListener('click', slider_start);

    function slider_start() {
        overlay.classList.toggle('invisible_item');
        invisible_slider.classList.toggle('invisible_item');
        document.documentElement.classList.add('no_scroll');
    }

    close_btn_slider.addEventListener('click', function () {
        overlay.classList.toggle('invisible_item');
        invisible_slider.classList.toggle('invisible_item');
        document.documentElement.classList.remove('no_scroll');
    })

    modal_trigger.addEventListener('click', function () {
        apply_modal.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.add('no_scroll');
    })

    modal_btn.addEventListener('click', function () {
        apply_modal.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.remove('no_scroll');
    })

    modal_thanx_btn.addEventListener('click', function () {
        apply_modal.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.remove('no_scroll');
    })

    open_video.addEventListener('click', function () {
        hidden_video.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.add('no_scroll');
    })

    close_btn_video.addEventListener('click', function () {
        hidden_video.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.remove('no_scroll');
    })