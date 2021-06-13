function comment (value)
{
    var count = value; // Num of rows in Post
    var comments = document.getElementsByClassName('comments' ); // Get all class with comments
    var forms = document.getElementsByTagName( 'form' ); // Get all form tag
    var div = document.getElementsByClassName('comment');
    var submit = document.getElementsByClassName( 'submit' );
    comments[ count ].addEventListener( 'click', ( ev ) => // on click comments will toggle forms class
    {
        forms[ count ].classList.toggle( 'hidden' );
        div[count].classList.toggle('hidden');
    } );
    submit[ count ].addEventListener( 'click', ( ev ) =>
    {
        forms[count].classList.add( 'hidden' );
    } );
}
function coment(){
    var comment  = document.getElementById('comments');
    var form = document.getElementsByTagName('form');
    var submit = document.getElementById('submit');
    comment.addEventListener('click', (ev) => {
        form.classList.toggle('hidden');
    } );
    submit.addEventListener( 'click', ( ev ) =>
    {
        forms.classList.add( 'hidden' );
    } );
}
