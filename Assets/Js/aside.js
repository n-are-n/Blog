var form = document.getElementById('Form');
var data = new FormData(form);
for (let enrty of data) {
    console.log(enrty);
}
var Inputs = document.querySelectorAll('input[type="radio"]');
Inputs.forEach(Input => {
    Input.addEventListener('click', (e) => {
        var URL = 'Assets/Php/aside.php?' + Input.name + '=' + Input.value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        }
        xhr.open('GET', URL, true);
        xhr.send();
    });
});
