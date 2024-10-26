<?php
include "connect.php";
global $conn;
$id_gv = $_GET['id'];
$sql = "delete from giangvien where ID_stt = $id_gv";
$run = mysqli_query($conn, $sql);
if($run){
    echo"Xoá thành công!";
    header("Location: qly.php");
    exit;
}
else{
    echo"Xoá không thành công!";
}
?>