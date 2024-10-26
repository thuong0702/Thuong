<?php
    include('../View/GD_update.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Giang Duong</title>
</head>
<body>
    <h2>Cập nhật Giảng Đường</h2>
    <form method="post">
        <label for="tengv">Giáo Viên:</label>
        <input type="text" name="tengv" value="<?php echo $data['GIANGVIEN']; ?>" required><br>
        <label for="tengd">Giảng Đường:</label>
        <input type="text" name="tengd" value="<?php echo $data['GIANGDUONG']; ?>" required><br>
        <label for="tenmd">Môn Dạy:</label>
        <input type="text" name="tenmd" value="<?php echo $data['MONDAY']; ?>" required><br>
        <input type="submit" name="update" value="Cập Nhật">
    </form>
</body>
</html>