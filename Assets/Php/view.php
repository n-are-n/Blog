<?php
include_once('config.php');
// view specific data from database
$ID = $_REQUEST['id'];
$query = "SELECT * FROM " . Table . " WHERE ID = $ID";
$sql = mysqli_query($conn, $query);
if (isset($_REQUEST['user'])) {
    $User_ID = $_REQUEST['user'];
    $_query = "SELECT * FROM " . Table . " WHERE User_ID = $User_ID";
    $_sql = mysqli_query($conn, $_query);
    $result = mysqli_fetch_assoc($_sql);
}
