<?php
include_once('Assets/Php/config.php');
function Like($ID){
    $query = "SELECT COUNT(Dislike) FROM " . Like_Dislike . " WHERE Dislike = 1 AND Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(Dislike)']);
}
