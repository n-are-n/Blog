<?php
include_once('config.php');
$Author = $_GET['Author'] ?? 'NULL';
$Category = $_GET['Category'] ?? 'NULL';
$query = "SELECT P.ID,User_ID,Name,DATE_FORMAT( P.Date_Time , '%b %d' ) as created_at,Category_ID,Category,_Views,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID WHERE(
        CASE
            WHEN ISNULL(User_id = $Author) OR ISNULL(Category_id = $Category) THEN User_id = $Author OR Category_id = $Category
            WHEN User_id = $Author AND Category_id = $Category THEN User_id = $Author AND Category_id = $Category
            END)";
$_sql = mysqli_query($conn, $query);
foreach($_sql as $aside){
    print_r($aside);
}
