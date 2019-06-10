document.addEventListener('DOMContentLoaded', function () {
    var menuBlock = document.querySelector('.main-menu');

    document.querySelector('.menu-item-menu').addEventListener('click', function () {
        menuBlock.classList.add('visible');
    });
    document.querySelector('.main-menu .close img').addEventListener('click', function () {
        menuBlock.classList.remove('visible');
    });
});