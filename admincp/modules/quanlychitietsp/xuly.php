<?php
    include '../config.php';
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    	mysqli_query($conn, "DELETE FROM hanghoa WHERE MSHH ='$id';");
		header('location:../../index.php?quanly=quanlychitietsp');
	}else{
		$mshh = $_POST['mshh'];
		$ten_hh = $_POST['tenhh'];
		$gia = $_POST['gia'];
		$so_luong = $_POST['soluong'];
		$ma_nhom = $_POST['manhom'];
		$mo_ta_hh = $_POST['motahh'];
		$hinh = $_FILES['hinh']['name'];
		$hinh_tmp = $_FILES['hinh']['tmp_name'];
		move_uploaded_file($hinh_tmp, 'uploads/'.$hinh);
	
    
    if (isset($_POST['them'])) {
    	$sql = "INSERT INTO hanghoa VALUES ('$mshh', '$ten_hh', $gia, $so_luong, '$ma_nhom', '$hinh', '$mo_ta_hh');";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	} else if (isset($_POST['sua'])) {
		if ($hinh != '') {
			$sql = "UPDATE hanghoa SET TenHH = '$ten_hh', Gia = $gia, 
						SoLuongHang = $so_luong, MaNhom = '$ma_nhom', Hinh = '$hinh', MoTaHH = '$mo_ta_hh' WHERE MSHH = '$id';";
			mysqli_query($conn, $sql);
		} else {
			mysqli_query($conn, "UPDATE hanghoa SET TenHH = '$ten_hh', Gia = $gia, 
						SoLuongHang = $so_luong, MaNhom = '$ma_nhom', MoTaHH = '$mo_ta_hh' WHERE MSHH = '$id';");
		}
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$id);
	}
	}
?>