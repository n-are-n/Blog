<?php
# User Account Deletion
include_once('config.php');
$ID = $_REQUEST['id']; # Get id of acc to del
$query = "DELETE FROM ".table." WHERE ID = $ID";
$sql = mysqli_query($conn,$query);
header('Location: ../../home.php?User=Deactivated');
