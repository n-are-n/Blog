<?php
include_once('config.php');
// Update data in database
$ID = $_GET['ID'];
$Title = $_GET['Title'];
$Blog = $_GET['Blog'];
$query = "UPDATE " . Table . " SET Title = '$Title', Blog = '$Blog' WHERE ID = $ID";
mysqli_query($conn, $query);
header('Location: ../../home.php?Post=Updated');
