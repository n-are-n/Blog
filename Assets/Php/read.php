<?php
# Return all post's from database
include_once('config.php');
$query = 'SELECT * FROM ' . Table. " WHERE Category_ID IN(SELECT Category FROM " .TABLE. " )";
$sql = mysqli_query($conn, $query);
