export function scrollToSection() {
    let header = document.querySelector('.header');
    let menuLinks = document.querySelectorAll('.header-bottom-menu__link[data-goto]');

    if (header && menuLinks.length > 0) {
        menuLinks.forEach(menuLink => {
            menuLink.addEventListener('click', function (event) {
                event.preventDefault();
                if (this.dataset.goto && document.querySelector(this.dataset.goto)) {
                    let gotoBlock = document.querySelector(this.dataset.goto);
                    let gotoBlockValue = gotoBlock.getBoundingClientRect().top + scrollY - header.offsetHeight;
                    window.scrollTo({
                        top: gotoBlockValue,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
}