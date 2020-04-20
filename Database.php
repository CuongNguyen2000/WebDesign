<?php 
//kết nối cơ sở dữ liệu 
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'storeman';
$port = 3306;
function query($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;

	//create connection
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);

	//check connection
	if ($conn -> connect_error) {
		//Neu nhu ket noi khong thanh cong thi dung chuong trinh
		echo "Connection Failed<br>";
		//Dung chuong trinh
		die($conn -> connect_error);
	}
	//Chay cau lenh truy van va lay ket qua
	$result = $conn -> query($sql);
	if (!$result) {
		//Neu khong co ket qua ($result=null) thi dung chuong trinh
		echo "SQL execution fail <br>";
		die($conn -> error);
	}

	//Lay tat car cac ban ghi tu ket qua
	$rows = mysqli_fetch_all($result);
	return $rows;
}

function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli ($hostname, $username, $password, $dbname, $port);
	if ($conn -> connect_error)
	{
		//nếu như kết nối không thành công thì dừng chương trình
		echo "Connection fail <br>";
		//dừng chương trình
		die ($conn -> connect_error);
	}

	//chạy câu truy vấn lấy kết quả
	$result = $conn -> query($sql);
	return $result;
}
?>