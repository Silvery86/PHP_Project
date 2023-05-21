<?php
require_once("connectDatabase.php");
function getEmployeesList()
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "SELECT * FROM employees";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    if($ketqua==FALSE)
        return NULL;
    else
    {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_BOTH);
        return $rows;//Trả về mảng các dòng dữ liệu
    } 
}
function addEmployee($employeeName,$employeePhone,$genre,$employeePicture)
{
    $conn = ConnectDB();
    if($conn == NULL)
        return NULL;
    $sql = "INSERT INTO employees VALUES(NULL,?,?,?,?)";
    $pdo_stm = $conn->prepare($sql);
    $pdo_stm->bindParam(1,$employeeName);
    $pdo_stm->bindParam(2,$employeePhone);
    $pdo_stm->bindParam(3,$genre);
    $pdo_stm->bindParam(4,$employeePicture);
    $ketqua = $pdo_stm->execute();
    return $ketqua;
}
function getEmployee($emloyeeId)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "SELECT * FROM employees WHERE emloyeeId=?";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$emloyeeId);
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    if($ketqua==FALSE)
        return NULL;
    else
    {
        $row = $pdo_stm->fetch(PDO::FETCH_BOTH);
        return $row;//Trả về mảng chứa dữ liệu
    } 
}
function UpdateEmployee($id,$hoten,$dienthoai,$gioitinh,$hinhanh)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "UPDATE employees 
            SET employeeName=?,employeePhone=?,genre=?,employeePicture=? WHERE emloyeeId=?";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$hoten);
    $pdo_stm->bindParam(2,$dienthoai);
    $pdo_stm->bindParam(3,$gioitinh);
    $pdo_stm->bindParam(4,$hinhanh);
    $pdo_stm->bindParam(5,$id);
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    return $ketqua;//TRUE/FALSE
}
function DeleteEmployee($id)
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "DELETE FROM employees WHERE emloyeeId=?";
    $pdo_stm = $conn->prepare($sql);//tạo đối tượng PDOStatement
    $pdo_stm->bindParam(1,$id);
    $ketqua = $pdo_stm->execute();//thực thi câu sql
    return $ketqua;//TRUE/FALSE
}
?>
