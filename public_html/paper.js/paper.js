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
var modal_thanx_btn = document.getElementById('modal_thanx_btn');
var close_btn_video = document.getElementById('close_btn_video');
var hidden_video = document.getElementsByClassName('hidden_video')[0];
var open_video = document.getElementsByClassName('circle_amimation_container')[0];
var modal_trigger = document.getElementsByClassName('modal_trigger');

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

document.body.addEventListener('click', function (event) {
    var target = event.target;
    if (target.classList.contains('modal_trigger')) {
        apply_modal.classList.toggle('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.add('no_scroll');
    }
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

var phoneToMask = document.getElementById('selector');
var phoneToMask_second = document.getElementById('selector_second');
var maskOptions = {
    mask: '+{7}(000)000-00-00'
};
var mask = new IMask(phoneToMask, maskOptions);

var second_mask = new IMask(phoneToMask_second, maskOptions);


var name_mask = document.getElementById('masked_name');
var name_mask_second = document.getElementById('masked_name_second')
var patternMask = new IMask(name_mask, {
    mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
});
var patternMask = new IMask(masked_name_second, {
    mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
});

var rub_arr = ['186 млн.руб/месяц', '95 млн.руб/месяц', '91 млн.руб/месяц'];
var tonn_arr = ['41500 руб/тонна', '21300 руб/тонна', '20200 руб/тонна'];
var table_content_item_income_item = document.getElementsByClassName('table_content_item_income_item');
var table_content_item__switch_btn = document.getElementsByClassName('table_content_item__switch_btn')[0];

table_content_item__switch_btn.addEventListener('click', function (event) {
    var target = event.target;
    if (target.id == 'rub') {
        table_content_item__switch_btn.children[1].classList.remove('table_switch_btn_activ');
        target.classList.add('table_switch_btn_activ');
        for (var i = 0; i < table_content_item_income_item.length; i++) {
            table_content_item_income_item[i].innerHTML = rub_arr[i];
        }
    } else if (target.id == 'tonn') {
        table_content_item__switch_btn.children[0].classList.remove('table_switch_btn_activ');
        target.classList.add('table_switch_btn_activ');
        for (var i = 0; i < table_content_item_income_item.length; i++) {
            table_content_item_income_item[i].innerHTML = tonn_arr[i];
        }
    }
})

const rangeSlider = document.querySelector('.range-slider');
const rangeValueBar = document.querySelector('#range-value-bar');
const rangeValue = document.querySelector('#range-value');
const percent_equal = (450000000 - 1000000) / 100;
const range_slider_input = document.getElementsByClassName('range_slider_input')[0];


let isDown = false;

function dragHandler() {
    isDown = !isDown;
    if (!isDown) {
        getInputNumber(rangeSlider.value)}
         else {
        getInputNumber(rangeSlider.value) 
        }
    }

    function getInputNumber(value) {
        let input_num = Number(value*percent_equal+1000000);
        range_slider_input.innerHTML = input_num.toLocaleString();
        const parent = document.getElementsByClassName('table_content_calc_item_number');
        let month_income = 44590000*(input_num*100/450000000)/100;
        if(String(Math.round(month_income)).length < 7) {
            parent[0].children[1].innerHTML = 'тыс.'
        }
        else {
            parent[0].children[1].innerHTML = 'млн.'
        }
        parent[0].children[0].innerHTML = Math.round(month_income).toLocaleString();
    }

    function dragOn(e) {
        if (!isDown) return;
        rangeValueHandler();
    }

    function rangeValueHandler() {
        rangeValueBar.style.setProperty('width', `${rangeSlider.value}%`);
        rangeValue.style.setProperty('transform', `translateX(-${this.value}%)`);
        getInputNumber(rangeSlider.value);
    }

    rangeValueHandler();
    rangeSlider.addEventListener('mousedown', dragHandler);
    rangeSlider.addEventListener('mousemove', dragOn);
    rangeSlider.addEventListener('mouseup', dragHandler);
    rangeSlider.addEventListener('click', rangeValueHandler);
    rangeSlider.addEventListener("touchstart", dragHandler, false);
    rangeSlider.addEventListener("touchend", dragHandler, false);
    rangeSlider.addEventListener("touchmove", dragOn, false);