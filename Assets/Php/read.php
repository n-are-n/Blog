<?php
# Return all post's from database
include_once('config.php');
$query = "SELECT * FROM " . Table . " P INNER JOIN " . TABLE . " C ON C.ID = P.Category_ID WHERE C.ID = P.Category_ID"; // Select all the records in table
$sql = mysqli_query($conn, $query);

$_query = "SELECT Post_ID,COUNT(Coment) FROM " . _Table." GROUP BY Post_ID";
$_sql = mysqli_query($conn,$_query);
$array = [];
foreach($_sql as $_count){
    $array[] .= $_count['COUNT(Coment)'];
}

$_Query = "SELECT Post_ID,Dislike,COUNT(Dislike) FROM " . _table . " GROUP BY Post_ID,Dislike";
$_Sql = mysqli_query($conn,$_Query);
foreach($_Sql as $_Count){
    print_r($_Count);
    echo '<br>';
}
echo '<br>';

$_array = array();
$Query = "SELECT Post_ID,Coment FROM " . _Table;
$Sql = mysqli_query($conn,$Query);
print_r($Sql);
echo '<br>';
$result = mysqli_fetch_array($Sql);
print_r($result);
echo '<br>';
foreach($Sql as $Comment){
    $_array[] .= $Comment['Coment'];
}
print_r($_array);