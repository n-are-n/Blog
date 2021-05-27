<?php
# User account creation
include_once('config.php');
# Get user data name,number,mail,password
$Name = $_POST['Name'];
$Number = $_POST['Number'];
$Mail = $_POST['Mail'];
$Password = md5($_POST['Password']);
$query = "SELECT * FROM " . table . " WHERE Number = $Number || Mail = '$Mail'"; # check wether user is already exist
$sql = mysqli_query($conn, $query);
$rows = mysqli_num_rows($sql);
if ($rows == 0) { # if not then insertion
    $query = "INSERT INTO " . table . "(Name,Number,Mail,Password) VALUES('$Name','$Number','$Mail','$Password')";
    $sql = mysqli_query($conn, $query);
    !$sql ?: header('Location: ../../signin.php?User=Added');
} else {
    header('Location: ../../signup.php?SignUp=Failed');
}
