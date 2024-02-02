const hamButton = document.querySelector('#menu');
const navigation = document.querySelector('.navigation');

hamButton.addEventListener('click', () => {
	navigation.classList.toggle('open');
	hamButton.classList.toggle('open');
});

var btn = document.querySelector('#button-group');

btn.addEventListener('click', function () {

    if (group.style.display === "block") {
        group.style.display = 'none';
    } else {
        group.style.display = 'block';
    }
});

var btn = document.querySelector('#button-private');

btn.addEventListener('click', function () {

    if (private.style.display === "block") {
        private.style.display = 'none';
    } else {
        private.style.display = 'block';
    }
});