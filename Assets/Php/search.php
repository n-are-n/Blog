<?php
include_once('config.php');
$Keyword = $_GET['Key'];
$_query = "SELECT P.ID,P.Date_Time,Name,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE Name LIKE '%$Keyword%' OR Category LIKE '%$Keyword%' OR Title LIKE '%$Keyword%' OR Post LIKE '%$Keyword%'";
$_sql = mysqli_query($conn,$_query);
