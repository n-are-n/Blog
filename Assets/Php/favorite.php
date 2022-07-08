<?php
include_once('config.php');
$User = $_REQUEST['user'];
$Post = $_REQUEST['post'];
$query = "INSERT INTO ". Favortite_Posts ."(User_ID,Post_ID) VALUES($User,$Post)";
mysqli_query($GLOBALS['conn'],$query);
header('Location: ../../index.php?Favorite=Added');
