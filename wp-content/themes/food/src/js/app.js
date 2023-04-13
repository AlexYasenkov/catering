import { moveElements } from './modules/move.js';
import { scrollToSection } from './modules/scroll.js';
import { menuBurger } from './modules/burger.js';
import { sliderSwiper } from './modules/swiper.js';
import { removePlaceholders } from './modules/forms.js';
import { popUpAction } from './modules/popup.js';

window.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('resize', moveElements);
    moveElements();
    scrollToSection();
    menuBurger();
    sliderSwiper();
    removePlaceholders();
    popUpAction();
});