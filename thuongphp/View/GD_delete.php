<?php
include('GD_select.php');

// Create an instance of the data_GiangDuong class
$gd = new data_giangDuong();

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    // Delete the record by ID
    $gd->delete_gd($id);

    // Redirect back to the main page after deletion
    header("Location: GD_select.php");
}
?>
