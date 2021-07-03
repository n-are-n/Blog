<?php
include_once('config.php');
// view specific data from database
$ID = $_REQUEST['id'];
$query = "SELECT P.ID,User_ID,Category_ID,P.Date_Time,Category,Name,Title,Post FROM " . Posts . " P INNER JOIN " . Categories ." C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE P.ID = $ID"; // Join the Posts and Categories table using Category_ID = ID
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);
$User = $result['User_ID'];
$Category = $result['Category_ID'];
$query = "SELECT P.ID,User_ID,Category_ID,P.Date_Time,Category,_Views,Name,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID LEFT JOIN " . Users . " U ON P.User_ID = U.ID WHERE User_ID = $User UNION
        SELECT P.ID,User_ID,Category_ID,P.Date_Time,Category,_Views,Name,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID LEFT JOIN " . Users . " U ON P.User_ID = U.ID WHERE Category_ID = $Category ORDER BY Date_Time DESC";
$_sql = mysqli_query($conn, $query);
