<?php
	include '../config.php';
	$id = $_GET['id'];
	if (isset($_GET['ac'])) {
		$temp = $_GET['ac'];
	} else {
		$temp = '';
	} if ($temp == 'xoa') {
		$sql = "DELETE FROM dathang WHERE SoDonHH = '$id';"
		$sql .= "DELETE FROM chitietdathang WHERE SoDonHH = '$id';"
		mysqli_multi_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietdondh');
	}
?>