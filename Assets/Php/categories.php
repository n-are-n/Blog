<?php
include_once('Assets/Php/config.php');
$query = 'SELECT * FROM ' . Categories;
$sql = mysqli_query($conn,$query);
