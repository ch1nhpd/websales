<?php
	include '../config.php';
	$id = $_GET['id'];
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		mysqli_query($conn, "DELETE FROM khachhang WHERE MSKH ='$id';");
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	}else{
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$mskh = substr(str_shuffle($permitted_chars), 0, 5);
	$name = $_POST['name'];
	$dia_chi = $_POST['diachi'];
    $phone = $_POST['phone'];
    $tai_khoan = $_POST['taikhoan'];
    $mat_khau = $_POST['matkhau'];
	if (isset($_POST['them'])) {
		mysqli_query($conn, "INSERT INTO khachhang VALUES('$mskh', '$name', '$dia_chi', '$phone', '$tai_khoan', '$mat_khau');");
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	} else if (isset($_POST['sua'])) {
		$sql = "UPDATE khachhang SET HoTenKH = '$name', DiaChi = '$dia_chi', SoDienThoai = '$phone', 
							TaiKhoan = '$tai_khoan', MatKhau = '$mat_khau' WHERE MSKH = '$id';";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=sua&id='.$id);
	} 
	}
?>