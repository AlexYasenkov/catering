export function menuBurger() {
    let menuIcon = document.querySelector('.header-menu-icon');
    let menuHeader = document.querySelector('.header-menu');
    let menuLinks = document.querySelectorAll('.header-bottom-menu__link');

    if (menuIcon && menuHeader) {
        menuIcon.addEventListener('click', function() {
            document.body.classList.toggle('_menu-lock');
            menuIcon.classList.toggle('_active');
            menuHeader.classList.toggle('_active');
        });
        if (menuLinks.length > 0) {
            menuLinks.forEach(menuLink => {
                menuLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    if (document.body.classList.contains('_menu-lock')) {
                        document.body.classList.remove('_menu-lock');
                        menuIcon.classList.remove('_active');
                        menuHeader.classList.remove('_active');
                    }
                });
            });
        }
    }
}