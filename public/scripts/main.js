document.addEventListener('DOMContentLoaded', function () {
    for (var element of document.querySelectorAll('.ellipses')) {
        ellipsizeTextBox(element);
    }
});

function ellipsizeTextBox(element) {
    var wordArray = element.innerHTML.split(' ');
    element.title = element.innerHTML;
    while (element.scrollHeight > element.offsetHeight) {
        wordArray.pop();
        element.innerHTML = wordArray.join(' ') + '...';
     }
}