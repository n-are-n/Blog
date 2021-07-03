<?php
include_once('config.php');
$User = $_REQUEST['user'];
$Post = $_REQUEST['post'];
$Dislike = $_REQUEST['dislike'];
$query = "SELECT * FROM " . Like_Dislike ." WHERE User_ID = $User && Post_ID = $Post";
$sql = mysqli_query($conn,$query);
if($sql->{'num_rows'} === 0 ){
    $_query = "INSERT INTO " . Like_Dislike . "(User_ID,Post_ID,Dislike) VALUES($User,$Post,$Dislike)";
    mysqli_query($conn, $_query);
    header('Location: ../../view.php?dislike=added&id='.$Post);
} else {
    $Query = "UPDATE " . Like_Dislike . " SET Dislike = $Dislike WHERE User_ID = $User && Post_ID = $Post";
    mysqli_query($conn, $Query);
    header('Location: ../../view.php?dislike=updated&id='.$Post);
}
