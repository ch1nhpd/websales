<?php
	include '../config.php';
	$id = $_GET['id'];
	$ad = $_GET['ad'];
	if (isset($_GET['ac'])) {
		$temp=$_GET['ac'];
	} else {
		$temp='';
	} if ($temp == 'xuly') {
		mysqli_query($conn, "UPDATE dathang SET TrangThai = 'true', MSNV = (SELECT MSNV FROM nhanvien WHERE TaiKhoan = '$ad') WHERE SoDonHH = '$id';");
		header('location:../../index.php?quanly=quanlydondathang');
	} else if ($temp == 'xoa') {
		$sql = "DELETE FROM dathang WHERE SoDonHH = '$id';";
		$sql .= "DELETE FROM chitietdathang WHERE SoDonHH = '$id';";
		mysqli_multi_query($conn, $sql);
		header('location:../../index.php?quanly=quanlydondathang');
	}
?>