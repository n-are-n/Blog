<?php
// Database Connection
define('Host', 'localhost');
define('User', 'root');
define('Password', '');
define('Database', 'Blog');
define('Table', 'Post');
define('table', 'User');
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'Assets/Php/');
$conn = mysqli_connect(Host, User, Password, Database) or die(mysqli_connect_errno() . " : " . mysqli_connect_error());
