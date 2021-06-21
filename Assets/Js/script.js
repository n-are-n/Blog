// function comment(){
//     var comment  = document.getElementById('comments'); // Get id with comments
//     var div = document.getElementById('coment');
//     var form = document.getElementsByTagName('form'); // Get form tag
//     var submit = document.getElementById('submit');
//     comment.addEventListener('click', (ev) => { // on click comments will toggle forms class 
//         form[1].classList.toggle('hidden');
//         div.classList.toggle('hidden');
//     } );
//     submit.addEventListener('click', (ev) => {
//         form[1].classList.add('hidden');
//     } );
// }
// function showHint(value){
//     if(value.length > 0 ){ // Length of value should be greater than 0
//         const xhttp = new XMLHttpRequest(); // Creating a XMLHttpRequest
//         xhttp.onload = function() {
//             console.log(value);
//             document.getElementById("Hint").innerHTML = this.responseText; // Display the response in Hint
//             console.log(this.responseText);
//         }
//         xhttp.open("GET", "Assets/Php/search.php?search="+value); // Send the request to search.php
//         xhttp.send();
//     }
// }

// function reload() {
//     console.log(parent.location);
//     parent.location.href.reload();
// }
