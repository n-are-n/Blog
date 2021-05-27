<?php
# Database Connection
define('Host', 'localhost'); # Server Name
define('User', 'root'); # User Name
define('Password', ''); # Password
define('Database', 'Blog'); # Database Name
define('Table', 'Post'); # Post Table Name
define('table', 'User'); # User Table Name
define('ROOT_PATH', realpath(dirname(__FILE__))); # C:\xampp\htdocs\Projects\13l0G\Assets\Php
define('BASE_URL', 'Assets/Php/');
$conn = mysqli_connect(Host, User, Password, Database) or die(mysqli_connect_errno() . " : " . mysqli_connect_error()); # $conn send data to check
