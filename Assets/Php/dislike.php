<?php
include_once('config.php');
$User = $_REQUEST['user'];
$Post = $_REQUEST['post'];
$Dislike = $_REQUEST['dislike'];
$query = "SELECT * FROM " . _table ." WHERE User_ID = $User && Post_ID = $Post";
$sql = mysqli_query($conn,$query);
if($sql->{'num_rows'} === 0 ){
    $_query = "INSERT INTO " . _table . "(User_ID,Post_ID,Dislike) VALUES($User,$Post,$Dislike)";
    mysqli_query($conn, $_query);
    header('Location: ../../home.php?dislike=added');
} else {
    $Query = "UPDATE " . _table . " SET Dislike = $Dislike WHERE User_ID = $User && Post_ID = $Post";
    mysqli_query($conn, $Query);
    header('Location: ../../home.php?dislike=updated');
}