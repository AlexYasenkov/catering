const moveConfigs = [
    {
        width: 767,
        eqElem: 2,
        parentElem: '.header-menu',
        itemElem: '.header-bottom-nav_left',
        parentOriginalElem: '.header-bottom__column_left'
    },
    {
        width: 767,
        eqElem: 2,
        parentElem: '.header-menu',
        itemElem: '.header-bottom-nav_right',
        parentOriginalElem: '.header-bottom__column_right'
    },
    {
        width: 767,
        eqElem: 0,
        parentElem: '.header-top',
        itemElem: '.header-logo',
        parentOriginalElem: '.header-bottom__column_logo'
    },
    {
        width: 767,
        eqElem: 0,
        parentElem: '.header-menu',
        itemElem: '.header-top-lang',
        parentOriginalElem: '.header-top'
    }
];

export function moveElements() {
    moveConfigs.forEach(config => {
        moveElement(config.width, config.eqElem, config.parentElem, config.itemElem, config.parentOriginalElem);
    });
}

function moveElement(width, eqElem, parentElem, itemElem, parentOriginalElem) {
    let parent = document.querySelector(parentElem);
    let item = document.querySelector(itemElem);
    let parentOriginal = document.querySelector(parentOriginalElem);
    let viewportWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    let doneClass = '_done';

    if (parent && item && parentOriginal) {
        if (viewportWidth <= width && !item.classList.contains(doneClass)) {
            parent.insertBefore(item, parent.children[eqElem]);
            item.classList.add(doneClass);
        } else if (viewportWidth > width && item.classList.contains(doneClass)) {
            parentOriginal.insertBefore(item, parentOriginal.children[eqElem]);
            item.classList.remove(doneClass);
        }
    }
}