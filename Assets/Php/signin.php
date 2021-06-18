<?php
include_once('config.php');
$Number = $_POST['Number'];
$Password = $_POST['Password'];
$query = "SELECT * FROM " . Users . " WHERE Number = $Number && Password = PASSWORD('$Password')";
$sql = mysqli_query($conn, $query);
print_r($sql);
$rows = mysqli_num_rows($sql);
if ($rows > 0) { // If the user already exist then set session variables
    $array = mysqli_fetch_assoc($sql);
    $ID = $array['ID'];
    $_SESSION['ID'] = $ID;
    $_SESSION['Name'] = $array['Name'];
    $_SESSION['Pic'] = $array['Pic'];
    header('Location: ../../home.php?Login=Success');
} else {
    header('Location: ../../signin.php?Login=Failed');
}
