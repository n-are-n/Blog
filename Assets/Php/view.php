<?php
include_once('config.php');
// view specific data from database
$ID = $_REQUEST['id'];
$_query = "SELECT P.ID,Category,Title,Post FROM " . Posts . " P INNER JOIN " . Categories ." C ON P.Category_ID = C.ID WHERE P.ID = $ID"; // Join the Posts and Categories table using Category_ID = ID
$_sql = mysqli_query($conn, $_query);
