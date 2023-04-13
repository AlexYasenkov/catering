export function sliderSwiper() {
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 10,
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 20,
            stretch: 10,
        },
        breakpoints: {
            642: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    return swiper;
}