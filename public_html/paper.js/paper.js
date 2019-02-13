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

var productionStagesContent = document.getElementsByClassName('production_stages_content')[0];
var productionImg = document.getElementsByClassName('production_stages_content_img');
var productionSteps = document.getElementsByClassName('production_step_number');
var productPaginationBullet = document.getElementsByClassName('product_pagination_bullet');
var productionStepLine = document.getElementsByClassName('production_step_item_wrap');
var productionStepLineSecond = document.getElementsByClassName('production_step_item_layer');

productionStagesContent.addEventListener('click', function (event) {
    var target = event.target;
    if (target.classList.contains('production_step_number')) {
        changeProductionPic(target.id)
    }
})

function changeProductionPic(a) {
    switch (a) {
        case 'first_step':
            var index = 0;
            hideStagePic();
            productionImg[index].classList.remove('invisible_item');
            productionImg[index].classList.add('pic_opacity');
            productionSteps[index].classList.add('production_step_number_activ');
            productPaginationBullet[index].classList.add('product_pagination_activ');
            productionStepLine[index].classList.add('animated_produnction_line_go');
            break;

        case 'second_step':
            index = 1;
            hideStagePic();
            productionImg[index].classList.remove('invisible_item');
            productionImg[index].classList.add('pic_opacity')
            productionSteps[index].classList.add('production_step_number_activ');
            productPaginationBullet[index].classList.add('product_pagination_activ')
            productionStepLine[index].classList.add('animated_produnction_line_go');
            break;
        case 'third_step':
            index = 2;
            hideStagePic();
            productionImg[index].classList.remove('invisible_item');
            productionImg[index].classList.add('pic_opacity')
            productionSteps[index].classList.add('production_step_number_activ');
            productPaginationBullet[index].classList.add('product_pagination_activ');
            productionStepLine[index].classList.add('animated_produnction_line_go');
            break;
        default:
            console.log('some mistake')
            break;
    }
}

function hideStagePic() {
    for (var i = 0; i < productionImg.length; i++) {
        productionImg[i].classList.add('invisible_item');
        productionSteps[i].classList.remove('production_step_number_activ');
        productPaginationBullet[i].classList.remove('product_pagination_activ')
        productionStepLine[i].classList.remove('animated_produnction_line_go')
        productionImg[i].classList.add('pic_opacity')
    }
}

var expertsViewContent = document.getElementsByClassName('experts_view_content')[0];
var expertDocuments = ['./img/doc1.png', '../img/doc1.png', '../img/doc1.png', '../img/doc1.png'];
var newImg;

expertsViewContent.addEventListener('click', function (event) {
    var target = event.target;
    if (target.classList.contains('experts_view_content_item_img')) {
        expertsViewContentPicGoesBigger(target.id)
    }
})

function expertsViewContentPicGoesBigger(id) {
    var imgSrc;
    switch (id) {
        case 'expert_view_first_img':
            imgSrc = expertDocuments[0]
            break;

        case 'expert_view_second_img':
            imgSrc = expertDocuments[1]
            break;
        case 'expert_view_third_img':
            imgSrc = expertDocuments[2]
            break;
        case 'expert_view_fourth_img':
            imgSrc = expertDocuments[3]
            break;
        default:
            console.log('some mistake')
            break;
    }
    newImg = document.createElement('img');
    newImg.src = imgSrc;
    newImg.classList.add('experts_view_content_item_img_big');
    expertsViewContent.appendChild(newImg);
    overlay.classList.toggle('invisible_item');
    document.documentElement.classList.add('no_scroll');
}

var overlay = document.getElementsByClassName('overlay')[0];

overlay.addEventListener('click', function () {
    expertsViewContent.removeChild(newImg);
    overlay.classList.toggle('invisible_item');
    document.documentElement.classList.remove('no_scroll');
})

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
var phoneToMask_third = document.getElementById('selector_third');
var maskOptions = {
    mask: '+{7}(000)000-00-00'
};
var mask = new IMask(phoneToMask, maskOptions);

var second_mask = new IMask(phoneToMask_second, maskOptions);

var third_mask = new IMask(phoneToMask_third, maskOptions);


var name_mask = document.getElementById('masked_name');
var name_mask_second = document.getElementById('masked_name_second')
var masked_name_third_window = document.getElementById('masked_name_third_window');
var patternMask = new IMask(name_mask, {
    mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
});
var patternMask = new IMask(masked_name_third_window, {
    mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
});

var patternMask = new IMask(masked_name_second, {
    mask: '[aaaaaaaaaaaaaaaaaa][ ][aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa]'
});

var rub_arr = ['186 млн.руб/месяц', '95 млн.руб/месяц', '91 млн.руб/месяц'];
var tonn_arr = ['41500 руб/тонна', '21300 руб/тонна', '20200 руб/тонна'];
var table_content_item_income_item = document.getElementsByClassName('table_content_item_income_item');
var table_content_item__switch_btn = document.getElementsByClassName('table_content_item__switch_btn')[0];

const rangeSlider = document.querySelector('.range-slider');
const rangeValueBar = document.querySelector('#range-value-bar');
const rangeValue = document.querySelector('#range-value');
const percent_equal = (450000000 - 1000000) / 100;
const range_slider_input = document.getElementsByClassName('range_slider_input')[0];


let isDown = false;

function dragHandler() {
    isDown = !isDown;
    if (!isDown) {
        getInputNumber(rangeSlider.value)
    } else {
        getInputNumber(rangeSlider.value)
    }
}

function getInputNumber(value) {
    let input_num = Number(value * percent_equal + 1000000);
    range_slider_input.innerHTML = input_num.toLocaleString();
    const parent = document.getElementsByClassName('table_content_calc_item_number');
    let month_income = 44590000 * (input_num * 100 / 450000000) / 100;
    if (String(Math.round(month_income)).length < 7) {
        parent[0].children[1].innerHTML = 'тыс.'
    } else {
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

var download_about = document.getElementsByClassName('conditions_content_item')[1];

download_about.addEventListener('click', function (event) {
    var target = event.target;
    if (target.id == 'download_about') {
        document.getElementsByClassName('modal_window_third')[0].classList.remove('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.add('no_scroll');
    }
})

document.getElementById('third_modal_btn').addEventListener('click',
    function () {
        document.getElementsByClassName('modal_window_third')[0].classList.add('invisible_item');
        overlay.classList.toggle('invisible_item');
        document.documentElement.classList.remove('no_scroll');
    })


var expertsViewSliderControls = document.getElementsByClassName('expert_view_pagination')[0];
var expertsViewContentItem = document.getElementsByClassName('experts_view_content_item');
var expertPaginationBullet = document.getElementsByClassName('expert_pagination_bullet');
var fakeSlide = document.getElementsByClassName('fake_slide');
var expertViewCounter = 0;

expertsViewSliderControls.addEventListener('click', function (event) {
    var target = event.target;
    if (target.classList.contains('expert_view_prev_wrap')) {
        expertsViewSlider('expert_view_prev_wrap')
    } else if (target.classList.contains('expert_view_next_wrap')) {
        expertsViewSlider('expert_view_next_wrap')
    }
})

function expertsViewSlider(pass) {
    switch (pass) {
        case 'expert_view_prev_wrap':
            expertViewSlidesHide();
            expertChangeSlideBack()
            break;
        case 'expert_view_next_wrap':
            expertViewSlidesHide();
            expertChangeSlideNext()
            break;
        default:
            alert('Some mistake');
    }
}

function expertViewSlidesHide() {
    for (var i = 0; i < expertsViewContentItem.length; i++) {
        expertsViewContentItem[i].classList.add('invisible_item');
        expertPaginationBullet[i].classList.remove('expert_view_pagination_activ');
    }
}

function expertChangeSlideNext() {
    if (expertViewCounter < (Number(expertsViewContentItem.length) - 1)) {
        expertViewCounter++
        expertsViewContentItem[expertViewCounter].classList.remove('invisible_item');
        expertsViewContentItem[expertViewCounter].classList.add('fake_slide_animation_next');
        fakeSlide[1].classList.add('animate_fake_slide');
        removeAnimation();
        expertPaginationBullet[expertViewCounter].classList.add('expert_view_pagination_activ');
    } else if (expertViewCounter == (Number(expertsViewContentItem.length) - 1)) {
        expertViewCounter = 0;
        expertsViewContentItem[expertViewCounter].classList.remove('invisible_item');
        expertsViewContentItem[expertViewCounter].classList.add('fake_slide_animation_next');
        fakeSlide[1].classList.add('animate_fake_slide');
        removeAnimation();
        expertPaginationBullet[expertViewCounter].classList.add('expert_view_pagination_activ');
    }
}

function expertChangeSlideBack() {
    if (expertViewCounter == 0) {
        expertViewCounter = Number(expertsViewContentItem.length) - 1
        expertsViewContentItem[expertViewCounter].classList.remove('invisible_item');
        expertsViewContentItem[expertViewCounter].classList.add('fake_slide_animation_back');
        fakeSlide[0].classList.add('animate_fake_slide');
        removeAnimation();
        expertPaginationBullet[expertViewCounter].classList.add('expert_view_pagination_activ');
    } else if (expertViewCounter > 0) {
        expertViewCounter--;
        expertsViewContentItem[expertViewCounter].classList.remove('invisible_item');
        expertsViewContentItem[expertViewCounter].classList.add('fake_slide_animation_back');
        fakeSlide[0].classList.add('animate_fake_slide');
        removeAnimation();
        expertPaginationBullet[expertViewCounter].classList.add('expert_view_pagination_activ');
    }
}

function removeAnimation() {
    var timerId = setInterval(function () {
        for (var i = 0; i < fakeSlide.length; i++) {
            fakeSlide[i].classList.remove('animate_fake_slide');
        }
    }, 400);

    setTimeout(function () {
        clearInterval(timerId);
    }, 450);
}


window.onload = function () {
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

    var slider = tns({
        container: '.my-slider_satges',
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