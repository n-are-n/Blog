<?php
include_once('config.php');
// view specific data from database
if(isset($_REQUEST['id'])){
$ID = $_REQUEST['id'];
$_query = "SELECT P.ID,P.Date_Time,Category,Name,Title,Post FROM " . Posts . " P INNER JOIN " . Categories ." C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE P.ID = $ID"; // Join the Posts and Categories table using Category_ID = ID
$_sql = mysqli_query($conn, $_query);
}
