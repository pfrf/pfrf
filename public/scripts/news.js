document.addEventListener('DOMContentLoaded', function () {
    var current_index = 0,
        count         = document.querySelectorAll('.news .items .item').length,
        items_wrapper = document.querySelector('.news .items-wrapper .items'),
        block_height  = 110;

    document.querySelector('.news .go-top').addEventListener('click', function () {
        if (current_index - 3 > 0) {
            current_index = current_index - 3;
        } else {
            current_index = 0;
        }
        items_wrapper.style.top = -(current_index * block_height) + 'px';
    });
    document.querySelector('.news .go-bottom').addEventListener('click', function () {
        if (current_index + 3 < count - 3) {
            current_index = current_index + 3;
        } else {
            current_index = count - 3;
        }
        items_wrapper.style.top = -(current_index * block_height) + 'px';
    });
});