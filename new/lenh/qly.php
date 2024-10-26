
<?php
    include "connect.php";
    global $conn;
    $sql = "select * from giangvien";
    $run = mysqli_query($conn,$sql);
    $selectall = $run;

    $sql = "select ID_stt from giangvien";
    $run = mysqli_query($conn,$sql);
    $select_id = $run;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Ten GD</th>
            <th>Ten DV</th>
            <th>Mon day</th>
        </tr>
    <?php foreach($selectall as $row){ ?>
        <tr>
            <th> <?php echo $row['ID_stt'] ?> </th>
            <th> <?php echo $row['GIANGDUONG'] ?> </th>
            <th> <?php echo $row['GIANGVIEN'] ?> </th>
            <th> <?php echo $row['MONDAY'] ?> </th>
            <td>
            <a href="edit.php?id=<?php echo $row['ID_stt']; ?>">Sửa</a> | 
            <a href="delete.php?id=<?php echo $row['ID_stt']; ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
        </td>
    </tr>
    <?php } ?>

    </table>
</body>
</html>