<?php
# Post Creation in Database
include_once('config.php'); # Adding configuration file
$ID = $_GET['ID'];
$Category = $_GET['Category'];
$Title = $_GET['Title']; # Get title from user input
$Blog = $_GET['Blog'];
$query = "INSERT INTO " . Posts . "(User_ID,Category_ID,Title,Post) VALUES($ID,$Category,'$Title','$Blog')"; # Inserting $Title & $Blog to database
mysqli_query($conn, $query);
header('Location: ../../index.php?Post=Added'); # After insertion redirect to home page