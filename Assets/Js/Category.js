function Category() {
    var URL = 'Assets/Php/categories.php'
    var nav = document.getElementById('carousel')
    var xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var result = JSON.parse(this.responseText)
            result.forEach(e => {
                var a = document.createElement('a')
                a.innerText = e.Category
                a.addEventListener('click', (el) => {
                    filter(el.ID)
                })
                nav.appendChild(a)
            })
        }
    }
    xhr.open('GET', URL, true)
    xhr.send()
}
