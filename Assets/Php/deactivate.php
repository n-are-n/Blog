<?php
# User Account Deletion
include_once('config.php');
$ID = $_REQUEST['id']; # Get id of acc to delete
$query = "DELETE FROM " . Users . " WHERE ID = $ID";
mysqli_query($conn,$query);
session_start();
session_unset(); // Unset the session variables
session_destroy(); // Destroy session variables
header('Location: ../../home.php?User=Deactivated');