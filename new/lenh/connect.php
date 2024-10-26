<?php
    $server="localhost";
    $user="root";
    $pass="";
    $database="qlgd";
    $conn=mysqli_connect($server,$user,$pass,$database);
    mysqli_query($conn, 'set names "utf8"');

    $sql="select * from giangvien";
    $run=mysqli_query($conn,$sql);
?>