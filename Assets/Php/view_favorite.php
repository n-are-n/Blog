<?php
include_once('config.php');
$User = $_REQUEST['id'];
$query = "SELECT P.ID,User_ID,Category_ID,Name,P.Date_Time,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories ." C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE P.ID IN(SELECT Post_ID FROM " . Favortite_Posts . " WHERE User_ID = $User)"; // Select all the records in table
$_sql = mysqli_query($conn,$query);
