<?php
include 'connection.php';
//include 'nav.php';
//include 'css.php';


$sql="INSERT INTO $tblname (name,last_name,herotypes)
VALUES
('$_POST[name]','$_POST[lastname]','$_POST[types]')";

$result = mysqli_query($con,$sql);





header('Content-Type: application/json');
echo json_encode(array('row' => $sql,'message'=>'OK'));

