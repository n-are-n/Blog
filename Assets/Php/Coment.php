<?php
include_once('Assets/Php/config.php');
function Comment($ID){
    $query = "SELECT _Comment FROM " . Comments . " WHERE Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    foreach($sql as $comment){
        print_r($comment['_Comment']);
        echo '<br>';
    }
}
