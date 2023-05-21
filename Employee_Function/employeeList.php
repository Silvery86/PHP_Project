<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
</head>
<body>
    <h1 style="text-align:center; color:#090;">EMLOYEES LIST</h1>
    <p><a href="addEmployee.php">Add Employee</a></p>
    
    <table width="1009" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="87" bgcolor="FF9900">ID</td>
            <td width="212" bgcolor="FF9900">NAME</td>
            <td width="150" bgcolor="FF9900">PHONE</td>
            <td width="165" bgcolor="FF9900">GENRE</td>
            <td width="209" bgcolor="FF9900">IMAGE</td>
            <td width="172" bgcolor="FF9900">ACTION</td>
        </tr>
        <?php
        require_once("employeeTB.php");
        $rows = getEmployeesList();
        if($rows==NULL)
            die("<p> DATABASE ERROR! </p>");
        foreach($rows as $row)
        {
        ?>
        <tr>
            <td><?=$row["emloyeeId"]?></td>
            <td><?=$row["employeeName"]?></td>
            <td><?=$row["employeePhone"]?></td>
            <td><?=$row["genre"]==0?"Male":"Female"?></td>
            <td><?=$row["employeePicture"]?></td>
            <td>
            <a href="editEmployee.php?emloyeeId=<?=$row["emloyeeId"]?>">Edit</a> 
            -
            <a href="deleteEmployee.php?emloyeeId=<?=$row["emloyeeId"]?>" onclick="return confirm('Chắc chắn xóa?')">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    
</body>
</html>