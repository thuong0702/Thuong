<?php
$sever="localhost";
$user="root";
$pass="";
$database="qlgd";
$conn=mysqli_connect($sever,$user,$pass,$database);
mysqli_query ( $conn,'set names"utf8"');
?>