<?php
# Post Creation in Database
include_once('config.php'); # Adding configuration file
$ID = $_GET['ID'];
$Title = $_GET['Title']; # Get title from user input
$Blog = $_GET['Blog']; # Get Blog content
$query = "INSERT INTO " . Table . "(User_ID,Title,Blog) VALUES('$ID','$Title','$Blog')"; # Inserting $Title & $Blog to database
mysqli_query($conn, $query); 
header('Location: ../../home.php?Post=Added'); # After insertion redirect to home page
