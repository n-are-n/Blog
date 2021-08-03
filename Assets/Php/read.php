<?php
# Return all post's from database
include_once('config.php');
$query = "SELECT P.ID,User_ID,Category_ID,DATE_FORMAT( P.Date_Time ,'%b %d' ) as created_at,Category,_Views,Name,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID LEFT JOIN " . Users . " U ON P.User_ID = U.ID ORDER BY P.Date_Time DESC"; // Select all the records in table
$_sql = mysqli_query($conn, $query);
// foreach($_sql as $Post){
//     print_r($Post);
// }
