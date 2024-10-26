<?php
 // Create an instance of the data_GiangDuong class
include('../Model/control.php');
$gd = new data_giangDuong();
$id = $_GET['up'];
$record = $gd->select_gd_id($id);
foreach($record as $data)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../Controller/xuly_formGD.php?up=<?php echo $data['ID_stt']?>">
        <table border="2">
            <tr>
                <td colspan="2">Đăng ký thời khóa biểu</td>
            </tr>
            <tr>
                <td>Giảng đường:</td>
                <td>
                    <select name="txtgd" id="">
                    <option value="GD 501"><?php echo $data['GIANGDUONG']?> </option>
                        <option value="GD 501">GD 501</option>
                        <option value="GD 502">GD 502</option>
                        <option value="GD 503">GD 503</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên giáo viên:</td>
                <td>
                    <input type="text" name="txtname" value="<?php echo $data['GIANGVIEN']?>">
                </td>
            </tr>
            <tr>
                <td>Môn dạy:</td>
                <td>
                    <select  name="txtmonday" id="">
                       <option value="GD 501"><?php echo $data['MONDAY']?> </option>
                        <option value="GD 501">Toán </option>
                        <option value="GD 502">Văn  </option>
                        <option value="GD 503">Anh </option>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" name="update" value="Đăng ký"></center>
                </td>
            </tr>
        </table>
    </form>
