<?php
    include '../config.php';
    $id = $_GET['id'];
    $ma_nhom = $_POST['manhom'];
    $ten_nhom = $_POST['tennhom'];
    if (isset($_POST['them'])) {
        mysqli_query($conn, "INSERT INTO nhomhanghoa VALUES('$ma_nhom', '$ten_nhom')");
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    } else if (isset($_POST['sua'])) {
        $sql = "UPDATE nhomhanghoa SET MaNhom = '$ma_nhom', TenNhom = '$ten_nhom' WHERE MaNhom = '$id';";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$ma_nhom);
    } else {
        mysqli_query($conn, "DELETE FROM nhomhanghoa WHERE MaNhom = '$id';");
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
?>