document.getElementsByClassName( 'comments' ).addEventListener( 'click', ( ev ) =>
{
    document.getElementById( 'form' ).classList.toggle( 'hidden' );
} );
document.getElementById( 'submit' ).addEventListener( 'click', ( ev ) =>
{
    document.getElementById( 'submit' ).classList.add( 'hidden' );
} );
