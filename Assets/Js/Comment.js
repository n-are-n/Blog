var comment  = document.getElementById('comments'); // Get id with comments
var div = document.getElementById('comment');
var form = document.getElementById('form'); // Get form tag
var submit = document.getElementById('submit');
comment.addEventListener('click', (e) => { // on click comments will toggle forms class 
    form.classList.toggle('hidden');
    div.classList.toggle('hidden');
} );
submit.addEventListener('click', (e) => {
    form.classList.add('hidden');
} );
