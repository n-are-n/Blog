function Category(ID) {
    var URL = 'Assets/Php/category.php?id=' + ID;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhr.open('GET', URL , true);
    xhr.send();
}
function search(){
    var Search = document.getElementById('Search').value;
    console.log(Search);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
    xhr.open('GET', 'Assets/Php/search.php?Key=' + Search, true);
    xhr.send();

}
