<?php
include_once('config.php');
// view specific data from database
$ID = $_REQUEST['id'];
$query = "SELECT * FROM " . Table . " WHERE ID = $ID";
$sql = mysqli_query($conn, $query);
