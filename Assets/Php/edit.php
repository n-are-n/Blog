<?php
include_once('config.php');
// Update data in database
$ID = $_GET['ID'];
$Title = $_GET['Title'];
$Blog = $_GET['Blog'];
$query = "UPDATE " . Table . " SET Title = '$Title', Blog = '$Blog' WHERE ID = $ID";
$sql = mysqli_query($conn, $query);
$rows = mysqli_num_rows($sql);
$rows <= 0 ?: header('Location: ../../home.php?Post=Updated');
