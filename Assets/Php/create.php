<?php
include_once('config.php');
$Title = $_GET['Title'];
$Blog = $_GET['Blog'];
$query = "INSERT INTO " . Table . "(Title,Blog) VALUES('$Title','$Blog')";
$sql = mysqli_query($conn, $query);
!$sql ?: header('Location: ../../home.php?Post=Added');
