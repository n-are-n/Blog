<?php
include_once('config.php');
$ID = $_REQUEST['id'];
$query = "SELECT * FROM ".Table." WHERE User_ID = $ID";
$sql = mysqli_query($conn,$query);
