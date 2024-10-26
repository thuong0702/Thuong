
    <?php
    include('../Model/control.php');
    $get_data = new data_giangduong();

    if (isset($_POST['submit'])) {
                            
        $in_gd = $get_data->insert_gd($_POST['txtgd'], $_POST['txtname'], $_POST['txtmonday']);
        if ($in_gd) {
            echo "<script>alert('Thành công'); window.location='../View/GD_select.php';</script>";
        } else {
            echo "<script>alert('Không thực thi được')</script>";
        }
    }

    if (isset($_POST['update'])) 
    {
                           
        $in_gd = $get_data->update_gd($_POST['txtgd'], $_POST['txtname'], $_POST['txtmonday'],$_GET['up']);
        if ($in_gd) {
            echo "<script>alert('Thành công'); window.location='../View/GD_select.php';</script>";
        } else {
            echo "<script>alert('Không thực thi được')</script>";
        }
    }
    ?>
 

</body>
</html>