<?php
# Return all post's from database
include_once('config.php');
$query = "SELECT P.ID,P.User_ID,Name,P.Date_Time,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID"; // Select all the records in table
$sql = mysqli_query($conn, $query);

function Comment_Count($ID){ // Calling Function
    $query = "SELECT COUNT(_Comment) FROM " . Comments ." WHERE Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(_Comment)']); // Print the value
}

function Like($ID){
    $query = "SELECT COUNT(Dislike) FROM " . Like_Dislike . " WHERE Dislike = 0 AND Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(Dislike)']);
}

function Dislike($ID){
    $query = "SELECT COUNT(Dislike) FROM " . Like_Dislike . " WHERE Dislike = 1 AND Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    $result = mysqli_fetch_array($sql);
    print_r($result['COUNT(Dislike)']);
}

function Comment($ID){
    $query = "SELECT _Comment FROM " . Comments . " WHERE Post_ID = $ID";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    foreach($sql as $comment){
        print_r($comment['_Comment']);
        echo '<br>';
    }
}
