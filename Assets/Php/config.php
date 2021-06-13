<?php
session_start(); // Start the session
# Database Connection
define('Host', 'localhost'); # Server Name
define('User', 'root'); # User Name
define('Password', ''); # Password
define('Database', 'Blog'); # Database
define('Categories','Categories'); // Category Table
define('Comments', 'Comments'); // Comment Table
define('Like_Dislike', 'Like_Dislike'); // Dislike Table
define('Posts', 'Posts'); # Post Table
define('Users', 'Users'); # User Table
define('ROOT_PATH', realpath(dirname(__FILE__))); # C:\xampp\htdocs\Projects\13l0G\Assets\Php
define('BASE_URL', 'Assets/Php/');
$conn = mysqli_connect(Host, User, Password, Database) or die(mysqli_connect_errno() . " : " . mysqli_connect_error()); # $conn send data to check