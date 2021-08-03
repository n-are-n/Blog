function Sort() {
    var sort = document.getElementById('select').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhr.open('GET', "Assets/Php/sort.php?sort=" + sort , true);
    xhr.send();
}
