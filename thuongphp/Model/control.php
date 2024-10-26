<?php
include('connect.php');

class data_giangDuong
{
    
    public function insert_gd($tengd, $tengv, $tenmd)
    {
        global $conn;
        $sql = "INSERT INTO giangvien(GIANGDUONG,GIANGVIEN,MONDAY) 
                             VALUES ('$tengd', '$tengv', '$tenmd')"; echo $sql;
        $run = mysqli_query($conn, $sql);

        return $run;
    }

    
    public function select_gd()
    {
        global $conn;
        $sql = "SELECT * FROM giaovien";
        $run = mysqli_query($conn, $sql);

        return $run;
    }

    
    public function select_gd_id($id)
    {
        global $conn;
        $sql = "SELECT * FROM giangvien WHERE ID_stt = $id";
        $run = mysqli_query($conn, $sql);

        return $run;
    }

    
    public function select_all_gd()
    {
        global $conn;
        $sql = "SELECT * FROM giangvien";
        $run = mysqli_query($conn, $sql);

        return $run;
    }

    
    public function delete_gd($id)
    {
        global $conn;
        $sql = "DELETE FROM giangvien WHERE ID_stt = $id";
        $run = mysqli_query($conn, $sql);

        return $run;
    }
    public function update_gd($gd, $gv, $md, $id)
    {
        global $conn;
        $sql = "UPDATE giangvien set GIANGDUONG='$gd',
                                     GIANGVIEN='$gv',
                                     MONDAY='$md'   
                               WHERE ID_stt = $id";
        $run = mysqli_query($conn, $sql);

        return $run;
    }
    
}
?>
