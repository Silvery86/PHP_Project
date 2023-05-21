<?php
require_once("employeeTB.php");

if(isset($_REQUEST["button1"])==FALSE)
    die("<h3> Form not submit </h3>");
$emloyId = $_REQUEST["id"];
$employeeName = $_REQUEST["tName"];
$employeePhone = $_REQUEST["tPhone"];
$genre = "";
if(isset($_REQUEST["rGenre"])==TRUE)
    $genre = $_REQUEST["rGenre"];
$employeePicture = $_REQUEST["tImage"];

$ketqua = UpdateEmployee($emloyId,$employeeName,$employeePhone,$genre,$employeePicture);
if($ketqua==TRUE)
    echo "<h3> Edit Successed! </h3>";
else
    echo "<h3> Data Error </h3>";
?>
<a href="EmployeeList.php">Employee List</a>