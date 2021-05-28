<?php
# Post Creation in Database
include_once('config.php'); # Adding configuration file
$Title = $_GET['Title']; # Get title from user input
$Blog = $_GET['Blog']; # Get Blog content
$query = "INSERT INTO " . Table . "(Title,Blog) VALUES('$Title','$Blog')"; # Inserting $Title & $Blog to database
$sql = mysqli_query($conn, $query); 
!$sql ?: header('Location: ../../home.php?Post=Added'); # After insertion redirect to home page
