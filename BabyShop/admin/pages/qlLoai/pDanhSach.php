<a href="index.php?c=3&a=3">
	<img src="images/new.png" />
</a>
<table cellspacing="0" border="1">
	<tr>
		<th width="100">STT</th>
		<th width="300">Tên tên loại sản phẩm</th>
		<th width="100">Tình trạng</th>
		<th width="200">Thao tác</th>
	</tr>
	<?php
		$sql = "SELECT * FROM LoaiSanPham";
		$result = DataProvider::ExecuteQuery($sql);
		$i = 1;
		while ($row = mysqli_fetch_array($result))
		{
			?>	
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $row["TenLoaiSanPham"]; ?></td>
					<td>
						<?php 
							if($row["BiXoa"] == 1)
								echo "<img src='images/locked.png' />";
							else
							 	echo "<img src='images/active.png' />";
						?>
					</td>
					<td>
						<a href="pages/qlLoai/xlKhoa.php?id=<?php echo $row["MaLoaiSanPham"] ?>">
							<img src="images/lock.png" />
						</a>
						<a href="index.php?c=3&a=2&id=<?php echo $row["MaLoaiSanPham"] ?>">
							<img src="images/edit.png" />
						</a>
					</td>
				</tr>
			<?php
		}
	?>
</table>