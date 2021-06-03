<?php
include_once('config.php');
$Number = $_POST['Number'];
$Password = md5($_POST['Password']);
$query = "SELECT * FROM " . table . " WHERE Number = $Number && Password = '$Password'";
$sql = mysqli_query($conn, $query);
$rows = mysqli_num_rows($sql);
if ($rows > 0) {
    $array = mysqli_fetch_assoc($sql);
    $ID = $array['ID'];
    $_SESSION['ID'] = $ID;
    $_SESSION['Name'] = $array['Name'];
    header('Location: ../../home.php?Login=Success');
} else {
    header('Location: ../../signin.php?Login=Failed');
}
