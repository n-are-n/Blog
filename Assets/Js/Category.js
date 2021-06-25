var prev = document.querySelector('.prev');
var next = document.querySelector('.next');
var images = document.getElementById('carousel').children;
var count = images.length;
let index = 0;
prev.addEventListener('click', (e) => {
    nextImage('prev');
});
next.addEventListener('click', (e) => {
    nextImage('next');
});
function nextImage(direction) {
    if (direction == 'next') {
        index++;
        if (index == count) {
            index = 0;
        }
    } else {
        if (index == 0) {
            index = count - 1;
        } else {
            index--;
        }
    }
    for (let i = 0; i < count; i++) {
        images[i].classList.remove('category');
    }
    images[index].classList.add('category');
}
