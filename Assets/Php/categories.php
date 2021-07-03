<?php
include_once('Assets/Php/config.php');
$query = 'SELECT * FROM ' . Categories . ' ORDER BY Category ASC';
$sql = mysqli_query($conn,$query);
