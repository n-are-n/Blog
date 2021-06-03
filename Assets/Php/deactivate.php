<?php
# User Account Deletion
include_once('config.php');
$ID = $_REQUEST['id']; # Get id of acc to del
$query = "DELETE FROM ".table." WHERE ID = $ID";
mysqli_query($conn,$query);
session_start();
session_unset();
session_destroy();
header('Location: ../../home.php?User=Deactivated');
