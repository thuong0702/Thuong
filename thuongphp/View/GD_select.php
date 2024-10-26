
<?php

include('../Model/control.php');
$gd = new data_giangDuong();
$select_giangduong = $gd->select_all_gd();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giang Duong Management</title>
</head>
<body>
    <h2>Danh sách giảng đường</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Giảng Đường</th>
                <th>Giáo Viên</th>
                <th>Môn Dạy</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($select_giangduong as $i_gd) {//duyet du lieu tra ve
            ?>
                <tr>
                    <td><?php echo $i_gd['GIANGDUONG']; ?></td>
                    <td><?php echo $i_gd['GIANGVIEN']; ?></td>
                    <td><?php echo $i_gd['MONDAY']; ?></td>
                    <td><a href="GD_update.php?up=<?php echo $i_gd['ID_stt']; ?>">Update</a></td>
<td><a href="GD_delete.php?del=<?php echo $i_gd['ID_stt']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Delete</a></td>


                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
