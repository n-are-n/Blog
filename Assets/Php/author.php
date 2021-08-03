<?php
include_once('config.php');
$query = "SELECT ID,Name FROM " . Users . " ORDER BY Name ASC";
$Sql = mysqli_query($conn,$query);
