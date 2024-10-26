<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../Controller/xuly_formGD.php">
        <table border="2">
            <tr>
                <td colspan="2">Đăng ký thời khóa biểu</td>
            </tr>
            <tr>
                <td>Giảng đường:</td>
                <td>
                    <select name="txtgd" id="">
                        <option value="GD 501">GD 501</option>
                        <option value="GD 502">GD 502</option>
                        <option value="GD 503">GD 503</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên giáo viên:</td>
                <td>
                    <input type="text" name="txtname">
                </td>
            </tr>
            <tr>
                <td>Môn dạy:</td>
                <td>
                    <select  name="txtmonday" id="">
                        <option value="GD 501">Toán </option>
                        <option value="GD 502">Văn  </option>
                        <option value="GD 503">Anh </option>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" name="submit" value="Đăng ký"></center>
                </td>
            </tr>
        </table>
    </form>

   
 

</body>
</html>