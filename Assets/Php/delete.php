<?php
# User Post Deletion
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "DELETE FROM " . Table . " WHERE ID = $ID"; // Delete records from table
mysqli_query($conn, $query);
header('Location: ../../home.php?Post=Deleted');
