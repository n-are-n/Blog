function comment (value)
{
    var count = value; // Num of rows in Post
    var comments = document.getElementsByClassName('comments' ); // Get all class with comments
    var forms = document.getElementsByTagName( 'form' ); // Get all form tag
    var submit = document.getElementsByClassName( 'submit' );
    comments[ count ].addEventListener( 'click', ( ev ) => // on click comments change forms class
    {
        forms[ count ].classList.toggle( 'hidden' );
    } );
    submit[ count ].addEventListener( 'click', ( ev ) =>
    {
        forms[count].classList.add( 'hidden' );
    } );
}
