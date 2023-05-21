<?php
require_once("employeeTB.php");
//lấy dữ liệu từ request
if(isset($_REQUEST["emloyeeId"])==false)
	die("<p>chưa có id nhân viên</p>");
$id = $_REQUEST["emloyeeId"];//lấy id nhân viên
if($id=="" || is_numeric($id)==false)
	die("<p>id không được rỗng và phải là số</p>");
    
$ketqua = DeleteEmployee($id);
if($ketqua==TRUE)
	echo "<H3> THÀNH CÔNG </H3>";
else
	echo "<h3> LỖI Xóa DỮ LIỆU</h3>";
?>
<a href="EmployeeList.php"> DANH SÁCH NV </a>