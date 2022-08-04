<?php
	include '../config.php';
	$id = $_GET['id'];
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		mysqli_query($conn, "DELETE FROM nhanvien WHERE MSNV = '$id';");
		header('location:../../index.php?quanly=quanlynhanvien&ac=them');
	}else {
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$msnv = substr(str_shuffle($permitted_chars), 0, 5);
		$name = $_POST['name'];
		$chuc_vu = $_POST['chucvu'];
		$dia_chi = $_POST['diachi'];
	    $phone = $_POST['phone'];
	    $tai_khoan = $_POST['taikhoan'];
	    $mat_khau = $_POST['matkhau'];
		if (isset($_POST['them'])) {
			mysqli_query($conn, "INSERT INTO nhanvien VALUES('$msnv', '$name', '$chuc_vu', '$dia_chi', '$phone', '$tai_khoan', '$mat_khau');");
			header('location:../../index.php?quanly=quanlynhanvien&ac=them');
		} else if (isset($_POST['sua'])) {
			$sql = "UPDATE nhanvien SET HoTenNV = '$name', ChucVu = '$chuc_vu', DiaChi = '$dia_chi', 
							SoDienThoai = '$phone', TaiKhoan = '$tai_khoan', MatKhau = '$mat_khau' WHERE MSNV = '$id';";
			mysqli_query($conn, $sql);
			header('location:../../index.php?quanly=quanlynhanvien&ac=sua&id='.$id);
		} 
		
	}
?>