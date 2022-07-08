function asideCategory() {
    var URL = 'Assets/Php/categories.php';
    var Category = document.getElementById('Category');
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var result = JSON.parse(this.responseText);
            result.forEach(e => {
                var input = document.createElement('input');
                input.value = e.ID;
                input.type = 'radio';
                var label = document.createElement('label');
                label.innerText = e.Category;
                var br = document.createElement('br');
                Category.append(input,label,br);
            });
        }
    }
    xhr.open('GET', URL, true);
    xhr.send();
}
