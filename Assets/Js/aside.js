var Inputs = document.querySelectorAll('input[type="radio"]');
var Submit = document.getElementById('Submit');
Inputs.forEach(Input => {
    Input.addEventListener('click', () => {
        if (Input.checked) {
            var URL = 'Assets/Php/aside.php?' + Input.name + '=' + Input.value;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
            }
            xhr.open('GET', URL, true);
            xhr.send();
        }
    });
});
