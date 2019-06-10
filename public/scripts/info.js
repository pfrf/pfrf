document.addEventListener('DOMContentLoaded', function () {
    var items          = document.querySelectorAll('.main-info-item')
        previousButton = document.querySelector('.controls .previous'),
        nextButton     = document.querySelector('.controls .next');

    previousButton.addEventListener('click', function () {
        for (var i = 0; i < items.length; i++) {
            if (items[i].classList.contains('active')) {
                items[i].classList.remove('active');
                if (i > 0) {
                    items[i - 1].classList.add('active');
                } else {
                    items[items.length - 1].classList.add('active');
                }
                break;
            }
        }
    });
    nextButton.addEventListener('click', function () {
        for (var i = 0; i < items.length; i++) {
            if (items[i].classList.contains('active')) {
                items[i].classList.remove('active');
                if (i + 1 < items.length) {
                    items[i + 1].classList.add('active');
                } else {
                    items[0].classList.add('active');
                }
                break;
            }
        }
    });
});