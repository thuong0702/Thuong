<?php
        include('connect.php');

        class data_giangduong{
            public function insert_gd($tengv, $tengd, $tenmd){
                global $conn;
                $sql="insert into giangvien(GIANGDUONG,GIANGVIEN,MONDAY)
                              values('$tengv', '$tengd','$tenmd')";
                $run=mysqli_query($conn,$sql);
                return $run;
            }
        }
?>