<?php
	include "../../../lib/DataProvider.php";

	if(isset($_GET["id"]))
	{
		$id = $_GET["id"];
		
		//Kiểm tra có sản phầm thuộc về hãng đang muốn xóa hay không?
		$sql = "SELECT COUNT(*) FROM SanPham WHERE MaHangSanXuat = $id";
		$result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_array($result);
		if($row[0] == 0)
		{
			//Thực hiện xóa hãng ra khỏi DB
			$sql = "DELETE FROM HangSanXuat WHERE MaHangSanXuat = $id";
		}
		else
		{
			//Thực hiện khóa hãng do đã có sản phầm thuộc về loại này
			$sql = "UPDATE HangSanXuat SET BiXoa = 1 - BiXoa WHERE MaHangSanXuat = $id";
		}
		
		DataProvider::ExecuteQuery($sql);
	}

	DataProvider::ChangeURL("../../index.php?c=4");
?>