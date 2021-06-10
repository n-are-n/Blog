<?php
# User account creation
include_once('config.php');
# Get user data name,number,mail,password
$Name = $_POST['Name'];
$Number = $_POST['Number'];
$Mail = $_POST['Mail'];
$Password = $_POST['Password'];
// $Pic = $_POST['Pic'];
$query = "SELECT * FROM " . table . " WHERE Name = '$Name' || Number = '$Number' || Mail = '$Mail' "; # check wether user is already exist
$sql = mysqli_query($conn, $query);
if($sql->{'num_rows'} === 0 ){ # if sql not return any rows then insertion
    $query = "INSERT INTO " . table . "(Name,Number,Mail,Password) VALUES('$Name','$Number','$Mail',PASSWORD('$Password'))";
    $sql = mysqli_query($conn, $query);
    header('Location: ../../signin.php?User=Added');
} else {
    header('Location: ../../signup.php?SignUp=Failed');
}
