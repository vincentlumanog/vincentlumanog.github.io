<?php
$host="localhost";
$username="root";
$pass="root";
$db="my_db1";
$tblname="user";


$con=mysqli_connect("$host","$username","$pass","$db");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 ?>
