<?php
    include 'modules/config.php';
	$run = mysqli_query($conn, "SELECT * FROM chitietdathang, dathang WHERE chitietdathang.SoDonHH = dathang.SoDonHH AND dathang.TrangThai = 'true' ORDER BY chitietdathang.GiaDatHang ASC;");
?>
<p class="main__content-title">Quản lý chi tiết đơn đặt hàng <span>/</span> Danh sách chi tiết đơn đặt hàng đã xử lý</p>
<div class="main__feature">
    <table class="main__feature-table">
        <tr>
            <th>ID</th>
            <th>Số đơn đặt hàng</th>
            <th>MSHH</th>
            <th>Số lượng</th>
            <th>Giá đặt hàng</th>
            <th>Quản lý</th>
        </tr>
        <?php
            $i = 1;
            while ($row = mysqli_fetch_array($run)) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['SoDonHH'] ?></td>
            <td><?php echo $row['MSHH'] ?></td>
            <td><?php echo $row['SoLuong'] ?></td>
            <td><?php echo number_format($row['GiaDatHang']) ?></td>
            <td><a href="modules/quanlychitietdondh/xuly.php?ac=xoa&id=<?php echo $row['SoDonHH'] ?>">Xóa</a></td>
        </tr>
        <?php
                $i++;
            }
        ?>
    </table>
</div>
<?php mysqli_close($conn); ?>