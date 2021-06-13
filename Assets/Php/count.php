<?php
include_once('config.php');
$ID = $_REQUEST['id'];
$view = $_REQUEST['view'];
$view++;
$query = "UPDATE " . Posts . " SET _Views = $view  WHERE ID = $ID";
mysqli_query($conn,$query);
header('Location: ../../view.php?id='.$ID);
