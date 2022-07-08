<?php
include_once('config.php');
$Keyword = $_GET['Key'];
$query = "SELECT P.ID,User_ID,Category_ID,DATE_FORMAT( P.Date_Time , '%b %d' ) as created_at,Name,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE Name LIKE '%$Keyword%' OR Category LIKE '%$Keyword%' OR Title LIKE '%$Keyword%' OR Post LIKE '%$Keyword%'";
$_sql = mysqli_query($conn,$query);
$data = array();
foreach($_sql as $Search){
    $data[] = $Search;
}
echo json_encode($data);
