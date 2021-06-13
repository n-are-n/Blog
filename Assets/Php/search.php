<?php
include_once('config.php');
// $Keyword = $_REQUEST['search'];
$Keyword = $_GET['Search'];
$query = "SELECT P.ID,Date_Time,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID WHERE Title OR Post LIKE '%$Keyword%'";
$sql = mysqli_query($conn,$query);
// foreach($sql as $Blog){
//     print_r($Blog['Title']);
// }
