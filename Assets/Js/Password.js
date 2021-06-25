function reload() {
    parent.location.reload();
}
var show = document.querySelector('#Show');
var Password = document.querySelector('#Password');
show.addEventListener('click', (e) => {
    var type = Password.getAttribute('type') === 'password' ? 'text' : 'password';
    Password.setAttribute('type', type);
});
