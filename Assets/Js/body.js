var date, comment, section, URL, xhr, result, article, div, divViews, divPost, aTitle, aPost, divDetails, divComment, spanLike, spanDislike, strong, p, a, span, _a, _span, Photo, spanCommentCount, aFavorite, aPhoto, image, Blog
Blog = new Array()
function Post() {
    comment = document.getElementById('comment')
    section = document.getElementById('section')
    URL = 'Assets/Php/read.php'
    xhr = new XMLHttpRequest()
    xhr.open('GET', URL , true)
    xhr.send()
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            result = JSON.parse(this.responseText)
            result.forEach(e => {
                article = document.createElement('article')
                section.appendChild(article)
                div = document.createElement('div')
                div.className = 'content'
                article.appendChild(div)
                Photo = document.createElement('div')
                Photo.id = 'Photo'
                Photo.className = 'Photo'
                article.appendChild(Photo)
                divViews = document.createElement('div')
                divViews.id = 'Views'
                div.appendChild(divViews)
                divPost = document.createElement('div')
                divPost.id = 'Blog'
                div.appendChild(divPost)
                aTitle = document.createElement('a')
                aTitle.id = 'Title'
                divPost.appendChild(aTitle)
                aPost = document.createElement('a')
                aPost.id = 'Post'
                divPost.appendChild(aPost)
                divDetails = document.createElement('div')
                divDetails.id = 'Details'
                div.appendChild(divDetails)
                divComment = document.createElement('div')
                divComment.id = 'comment'
                divDetails.appendChild(divComment)
                spanLike = document.createElement('span')
                spanLike.id = 'like'
                spanLike.innerHTML = '&#8679'
                divComment.appendChild(spanLike)
                spanDislike = document.createElement('span')
                spanDislike.id = 'Dislike'
                spanDislike.innerHTML = '&#8681'
                divComment.appendChild(spanDislike)
                spanCommentCount = document.createElement('span')
                spanCommentCount.id = 'commentCount'
                spanCommentCount.innerHTML = '&#128172;'
                divComment.appendChild(spanCommentCount)
                aFavorite = document.createElement('a')
                aFavorite.id = 'Favorite'
                aFavorite.innerHTML = '&#9825;'
                divComment.appendChild(aFavorite)
                strong = document.createElement('strong')
                strong.innerText = e.Title
                aTitle.appendChild(strong)
                p = document.createElement('p')
                p.innerText = e.Post
                aPost.appendChild(p)
                a = document.createElement('a')
                a.innerText = e.Name
                span = document.createElement('span')
                span.className = 'views'
                span.innerHTML = e._Views + '&#128065;'
                divViews.append(a, span)
                date = document.createElement('div')
                date.id = 'date'
                divDetails.appendChild(date)
                _span = document.createElement('span')
                _span.innerText = e.created_at
                _a = document.createElement('a')
                _a.innerText = e.Category
                spanArrow = document.createElement('span')
                spanArrow.innerHTML = '&#126;'
                date.append(_a, spanArrow.cloneNode(true), spanArrow, _span)
                aPhoto = document.createElement('a')
                aPhoto.id = 'Pic'
                Photo.appendChild(aPhoto)
                image = document.createElement('img')
                image.src = 'Assets/Pic/Chotta.jpg'
                image.width = 200
                image.height = 150
                aPhoto.appendChild(image)
                Blog.push(e)
            })
        }
    }
}
