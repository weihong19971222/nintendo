$("#shop_button_group p").click(function () {
    $("#shop_button_group p").removeClass("active");
    $(this).addClass("active");
});


// BANNER輪播
var swiper_shop = new Swiper('.swiper_shop', {
    slidesPerView: '3',
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 1500,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

// 主機輪播
var swiper_host = new Swiper('.swiper_host', {
slidesPerView: 3,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
//控制器輪播
var swiper_controller = new Swiper('.swiper_controller', {
slidesPerView: 3,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
//amiibo
var swiper_amiibo = new Swiper('.swiper_amiibo', {
slidesPerView: 3,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
//充電器
var swiper_charger = new Swiper('.swiper_charger', {
slidesPerView: 3,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
//其他
var swiper_other = new Swiper('.swiper_other', {
slidesPerView: 3,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
