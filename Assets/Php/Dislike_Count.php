<?php
include_once('Assets/Php/config.php');
function Dislike($ID){
    $query = "SELECT COUNT(Dislike) FROM " . Like_Dislike . " WHERE Dislike = 0 AND Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(Dislike)']);
}
