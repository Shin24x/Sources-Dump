<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "barangay_db";

$con = mysqli_connect($server,$username,$password,$database) or die ("Connect Failed" . mysqli_connect_error());

?>