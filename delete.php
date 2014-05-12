<?php
include 'connection.php';
 // include 'nav.php';
 // include 'css.php';
$sql ="DELETE FROM $tblname
WHERE `userID` ='$_POST[id]'";
$result = mysqli_query($con,$sql);

header('Content-Type: application/json');
echo json_encode(array('row' => $sql,'message'=>'OK'));