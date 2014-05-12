<?php

include 'connection.php';
$sql="SELECT * FROM $tblname WHERE `userID`='$_POST[id]'";

$result = mysqli_query($con,$sql);
$row = $result-> fetch_object();

header('Content-Type: application/json');
echo json_encode(array('row' => $row,'message'=>'OK'));