<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dinhdang.css">
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td colspan="2" class="caption">Thông tin đặt tiệc</td>
            </tr>
            <tr>
                <td>
                    Số khách tham gia:
                    <input type="text" name="txtsokhach">
                </td>
                <td>
                    Ngày:
                    <input type="date" name="txtngay">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Thời gian:
                    <input type="checkbox" name="txtbuoi[]" value="Sáng">Sáng
                    <input type="checkbox" name="txtbuoi[]" value="Trưa">Trưa
                    <input type="checkbox" name="txtbuoi[]" value="Tối">Tối
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Địa điểm:
                    <input type="radio" name="txtdiadiem" value="Trong nhà">Trong Nhà
                    <input type="radio" name="txtdiadiem" value="Ngoài trời">Ngoài Trời
                </td>
            </tr>
            <tr>
                <td>
                    Tên khách hàng:
                    <input type="text" name="txtten">
                </td>
                <td>
                    Giới tính:
                    <input type="radio" name="txtgioitinh" value="nam">Nam
                    <input type="radio" name="txtgioitinh" value="nu">Nữ
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ khách hàng:
                    <input type="text" name="txtdiachi">
                </td>
            </tr>
        <tr>
                <td colspan="2">Yêu cầu của khách hàng: </td>
        </tr>
            <tr>
                <td colspan="2">
                    <textarea name="txtyeucau" rows="4" cols="40"> </textarea>
                </td>
            </tr>
            <tr>
                <td> Khách hàng biết tới nhà hàng qua: </td>
                <td>
                    <select name="txtmxh">
                        <option value="Báo chí">Báo Chí</option>
                        <option value="Bạn bè">Quảng cáo</option>
                        <option value="facebook">Bạn bè</option>
                    </select>
                </td>  
               
            </tr>
            <tr>
                <td colspan="2">
                    <input class="dattieccss" type="submit" name="txtsub" value="Đặt tiệc">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['txtsub'])){
        if( empty($_POST['txtsokhach']) ||  empty($_POST['txtngay']) ||  empty($_POST['txtbuoi']) ||  empty($_POST['txtdiadiem'])
        ||  empty($_POST['txtten'])|| empty($_POST['txtgioitinh'])|| empty($_POST['txtdiachi'])){
            echo"vui lòng nhập đủ thông tin </3";
        }
        else{
            echo"Thông tin đặt tiệc của khách hàng: Đặt tiệc thành công!"."<br>";
            echo"Số Khách: ".$_POST['txtsokhach']." - Ngày tổ chức tiệc: ".$_POST['txtngay']."<br>";
            echo"Thời gian tổ chức tiệc: ";
            if (isset($_POST['txtbuoi'])) {
                $tmp = $_POST['txtbuoi'];
                foreach ($tmp as $buoi) {
                    $buoi. " ";
                }
            }
            echo"<br>Địa điểm tổ chức sự kiện: ".$_POST['txtdiadiem']."<br>";
            echo"Họ tên khách hàng: ".$_POST['txtten']." - Giới tính: ".$_POST['txtgioitinh']."<br>";
            echo"Địa chỉ khách hàng: ".$_POST['txtdiachi']."<br>";
            echo"Khách biết tới nhà hàng thông qua: ".$_POST['txtmxh']."<br>";
            echo"Yêu cầu của khách hàng: ".$_POST['txtyeucau'];
        }
   


    }
       
    ?>
</body>
</html>

