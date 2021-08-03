<?php
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "SELECT P.ID,User_ID,Name,DATE_FORMAT( P.Date_Time , '%b %d' ) as created_at,Category_ID,Category,_Views,Title,Post FROM " .Posts. " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE C.ID = $ID";
$_sql = mysqli_query($conn,$query);
foreach($_sql as $Category){
    print_r($Category);
}
