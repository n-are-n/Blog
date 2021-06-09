function comment (value)
{
    var count = value;
    var comments = document.getElementsByClassName('comments' );
    var forms = document.getElementsByTagName( 'form' );
    var submit = document.getElementsByClassName( 'submit' );
    comments[ count ].addEventListener( 'click', ( ev ) =>
    {
        forms[ count ].classList.toggle( 'hidden' );
    } );
    submit[ count ].addEventListener( 'click', ( ev ) =>
    {
        forms[count].classList.add( 'hidden' );
    } );
}
