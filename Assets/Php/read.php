<?php
# Return all post's from database
include_once('config.php');
$query = "SELECT * FROM " . Table; // Select all the records in table
$sql = mysqli_query($conn, $query);