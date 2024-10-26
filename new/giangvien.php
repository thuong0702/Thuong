<?php
    include "lenh/connect.php";
    global $conn;
    $sql = "select * from giangvien";
    $run = mysqli_query($conn,$sql);
    $selectall = $run;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Dang ky tkb</div><br>
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
        include ('lenh/control.php');
        $get_data= new data_giangduong();

        if(isset($_POST['submit'])){
            $in_gd= $get_data->insert_gd($_POST['GIANGDUONG'],$_POST['GIANGVIEN'], $_POST['MONDAY']);
            if($in_gd) echo "Thanh cong";
            else echo "Khong thuc thi duoc";
        }
    ?>
    <br>

<?php foreach($selectall as $row){ ?>
        <tr>
            <br>
            <th> <?php echo $row['GIANGDUONG'] ?> </th>
            <th> <?php echo $row['GIANGVIEN'] ?> </th>
            <th> <?php echo $row['MONDAY'] ?> </th>
        </td>
    </tr>
    <?php } ?>

    <?php
        
    ?>
</body>
</html>