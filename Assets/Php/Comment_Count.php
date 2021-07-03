<?php
include_once('Assets/Php/config.php');
function Comment_Count($ID){ // Calling Function
    $query = "SELECT COUNT(_Comment) FROM " . Comments ." WHERE Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(_Comment)']); // Print the value
}
