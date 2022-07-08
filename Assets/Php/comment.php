<?php
include_once('config.php');
$User = $_SESSION['ID'];
$Post = $_GET['Post_ID'];
$Comment = $_GET['Comment'];
$query = "INSERT INTO " . Comments . "(User_ID,Post_ID,_Comment) VALUES($User,$Post,'$Comment')";
mysqli_query($conn, $query); // send the $conn and $query to server
header('Location: ../../view.php?comment=added&id='.$Post);
