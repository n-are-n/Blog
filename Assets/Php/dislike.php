<?php
include_once('config.php');
$User = $_REQUEST['user'];
$Post = $_REQUEST['post'];
$Dislike = $_REQUEST['dislike'];
$query = "INSERT INTO " . _table . "(User_ID,Post_ID,Dislike) VALUES($User,$Post,$Dislike)";
mysqli_query($conn, $query);
header('Location: ../../home.php');
