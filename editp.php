<?php
include 'connection.php';
//include 'nav.php';
//include 'css.php';

$sql="UPDATE  $tblname SET `name`='$_POST[name]',`last_name`='$_POST[lastname]',
`herotypes`='$_POST[type]'
WHERE `userID`='$_POST[id]'";

$result = mysqli_query($con,$sql);





header('Content-Type: application/json');
echo json_encode(array('row' => $sql,'message'=>'OK'));

