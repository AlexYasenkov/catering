let popupLinks = document.querySelectorAll('.popup-link');
let popupCloseIcons = document.querySelectorAll('._close-popup');
let lockPadding = document.querySelectorAll('._lock-padding');
let body = document.querySelector('body');

let lockPaddingValue = window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';
let unlock = true;
let timeout = 500;

export function popUpAction() {
    if (popupLinks.length > 0) {
        popupLinks.forEach(popupLink => {
            popupLink.addEventListener('click', function (e) {
                e.preventDefault();
                let popupName = this.getAttribute('href').replace('#', '');
                let currentPopup = document.getElementById(popupName);
                popupOpen(currentPopup);
            });
        });
    }
    if (popupCloseIcons.length > 0) {
        popupCloseIcons.forEach(popupCloseIcon => {
            popupCloseIcon.addEventListener('click', function (e) {
                e.preventDefault();
                popupClose(this.closest('.header-popup'));
            });
        });
    }
}

function popupOpen(currentPopup) {
    if (currentPopup && unlock) {
        let popupActive = document.querySelector('.header-popup._open');
        if (popupActive) {
            popupClose(popupActive, false);
        } else {
            bodyLock();
        }
        currentPopup.classList.add('_open');
        currentPopup.addEventListener('click', function (e) {
            if (!e.target.closest('.header-popup-content')) {
                popupClose(e.target.closest('.header-popup'));
            }
        });
    }
}

function popupClose(popupActive, doUnlock = true) {
    if (unlock) {
        popupActive.classList.remove('_open');
        if (doUnlock) {
            bodyUnlock();
        }
    }
}

function bodyLock() {
    if (lockPadding.length > 0) {
        for (let i = 0; i < lockPadding.length; i++) {
            let elem = lockPadding[i];
            elem.style.paddingRight = lockPaddingValue;
        }
    }
    body.style.paddingRight = lockPaddingValue;
    body.classList.add('_popup-lock');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

function bodyUnlock() {
    setTimeout(function () {
        if (lockPadding.length > 0) {
            for (let i = 0; i < lockPadding.length; i++) {
                let elem = lockPadding[i];
                elem.style.paddingRight = '0px';
            }
        }
        body.style.paddingRight = '0px';
        body.classList.remove('_popup-lock');
    }, timeout);

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}