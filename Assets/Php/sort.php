<?php
require_once('config.php');
$sort = $_REQUEST['sort'];
$query = "SELECT P.ID,P.User_ID,Name,DATE_FORMAT( P.Date_Time , '%b %d' ) as created_at,Category_ID,Category,_Views,Dislike,Title,Post FROM " . Posts . " P INNER JOIN " . Categories . " C ON P.Category_ID = C.ID INNER JOIN " . Users . " U ON P.User_ID = U.ID INNER JOIN " . Like_Dislike . " L ON P.ID = L.Post_ID GROUP BY P.ID ORDER BY(
CASE
	WHEN '$sort' = 'View' THEN _Views
    WHEN '$sort' = 'Like' THEN Dislike
END) DESC";
$_sql = mysqli_query($conn, $query);
$array = mysqli_fetch_all($_sql);
foreach($_sql as $post){
    print_r($post);
}
