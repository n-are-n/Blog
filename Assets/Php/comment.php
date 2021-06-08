<?php
include_once('config.php');
$ID = $_GET['Post_ID'];
$Comment = $_GET['Comment'];
$query = "INSERT INTO " . _Table . "(Post_ID,Comment) VALUES($ID,'$Comment')";
mysqli_query($conn, $query);
$_query = "SELECT COUNT(Comment) FROM "._Table." WHERE Post_ID = $ID";
$_sql = mysqli_query($conn,$_query);
// $result = mysqli_fetch_assoc($_sql);
$Count = $result['COUNT(Comment)'];
header('Location: ../../view.php?comment=added&id='.$ID);
