<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
		$hostName = 'localhost';
		// khai báo biến username
		$userName = 'root';
		//khai báo biến password
		$passWord = '';
		// khai báo biến databaseName
		$databaseName = 'BabyShop';
		// khởi tạo kết nối
		$connection = mysqli_connect($hostName, $userName, $passWord, $databaseName);
		//Kiểm tra kết nối
		
		mysqli_set_charset($connection,"utf8");
		
		$result = mysqli_query($connection,$sql);
		
		mysqli_close($connection);
		
		return $result;
	}
	
	public static function ChangeURL($path)
	{
		echo '<script type = "text/javascript">';
		echo 'location = "'.$path.'";';
		echo '</script>';
	}
}
?>
