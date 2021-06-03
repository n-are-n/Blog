<?php
# User Post Deletion
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "DELETE FROM " . Table . " WHERE ID = $ID";
mysqli_query($conn, $query);
header('Location: ../../home.php?Post=Deleted');
