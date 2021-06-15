<?php
include('config.php');
$Follower = $_REQUEST['user'];
$Following = $_REQUEST['id'];
$query = "INSERT INTO " . Follow . "(Follower,Following) VALUES($Follower,$Following)";
$sql = mysqli_query($conn,$query);
header('Location: ../../index.php?follow=true');
