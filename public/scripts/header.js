document.addEventListener('DOMContentLoaded', function () {
    // событие клика по языку
    for (var element of document.querySelectorAll('.menu-item-languages .list .item')) {
        element.addEventListener('click', function (e) {
            Cookies.set('language', e.currentTarget.getAttribute('data-language'), { expires: 365 });
            window.location.reload();
        });
    }

    document.querySelector('.select-region').addEventListener('change', function (e) {
        if (e.currentTarget.value) {
            Cookies.set('region', e.currentTarget.value, { expires: 365 });
        }
    });

    for (var tab of document.querySelectorAll('.tab-button')) {
        tab.addEventListener('click', function (e) {
            for (var element of document.querySelectorAll('.tab-button')) {
                element.classList.remove('active');
            }
            e.currentTarget.classList.add('active');
            for (var content of document.querySelectorAll('.tab-content')) {
                if (content.getAttribute('data-index') === e.currentTarget.getAttribute('data-index')) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            }
        });
    }
});