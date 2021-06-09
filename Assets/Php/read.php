<?php
# Return all post's from database
include_once('config.php');
$query = "SELECT * FROM " . Table;
$sql = mysqli_query($conn, $query);