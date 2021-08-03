function Post() {
    var URL = 'Assets/Php/read.php';
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhr.open('GET', URL , true);
    xhr.send();
}
