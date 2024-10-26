<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>Chinh sua tkb</div><br>
    <form method="post">
        Giang duong: 
        <select name="GIANGDUONG" >
            <option value="GD501">GD 501</option>
            <option value="GD502">GD 502</option>
        </select><br>
        Ten GV: 
        <input type="text" name="GIANGVIEN"><br>
        Monday: 
        <input type="text" name="MONDAY"> <br>
        <input type="submit" value="Nop" name="submit">
    </form>
<?php
    include "connect.php";
    global $conn;
    $id_gv = $_GET['id'];

    if(isset($_POST['submit'])){
        if( empty($_POST['GIANGDUONG']) ||  empty($_POST['GIANGVIEN']) ||  empty($_POST['MONDAY']) ){
            echo"vui lòng nhập đủ thông tin";
        }
        else{
            $giangduong = $_POST['GIANGDUONG'];
            $giangvien = $_POST['GIANGVIEN'];
            $monday = $_POST['MONDAY'];
            
            $sql = "UPDATE giangvien 
                SET GIANGDUONG = '$giangduong', GIANGVIEN = '$giangvien', MONDAY = '$monday'
                WHERE ID_stt = $id_gv";
            $run = mysqli_query($conn, $sql);
            if($run){
                echo "Cập nhật thành công!";
                header("Location: qly.php");
            }
            else{
                echo"Cập nhật không thành công!";
            }
            
        }
        
    }
?>

</body>
</html>