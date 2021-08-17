<?php
include_once('config.php');
$data = array();
$query = 'SELECT * FROM ' . Categories . ' ORDER BY Category ASC';
$sql = mysqli_query($conn,$query);
foreach($sql as $result){
    $data[] = $result;
}
echo json_encode($data);
