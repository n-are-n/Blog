<?php
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "SELECT P.ID,Category_ID,DATE_FORMAT( Date_Time , '%b %d' ) as created_at,_Views,Category,Title,Post FROM ". Posts ." P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID WHERE User_ID = $ID";
$_sql = mysqli_query($conn,$query);
