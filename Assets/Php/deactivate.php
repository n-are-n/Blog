<?php
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "DELETE FROM ".table." WHERE ID = $ID";
$sql = mysqli_query($conn,$query);
header('Location: ../../home.php?User=Deactivated');
