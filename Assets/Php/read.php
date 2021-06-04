<?php
# Return all post's from database
include_once('config.php');
$query = 'SELECT * FROM ' . Table;
$sql = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($sql);
$ID =  $result['User_ID'];
$_query = "SELECT * FROM ".table." WHERE ID = $ID";
$_sql = mysqli_query($conn,$_query);
$_result = mysqli_fetch_assoc($_sql);
$Name = $_result['Name'];
