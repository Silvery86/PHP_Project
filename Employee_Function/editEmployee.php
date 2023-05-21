<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Edit Employee</title>
</head>
<body>
    <h2 style="text-align:center; color: #090;">Edit Employee</h2>
    <?php 
    if(isset($_REQUEST["emloyeeId"])==FALSE)
             die("<p> Dont have employee ID </p>");
        $emloyeeId = $_REQUEST["emloyeeId"];
        if($emloyeeId=="" || is_numeric($emloyeeId)==FALSE)
            die("<p> ID required and must be number </p>");
            require_once("employeeTB.php");
            $row = getEmployee($emloyeeId);
    ?>
    <form name="form1" method="post" action="processEditEmployee.php">
        <input type="hidden" name="id" id="id" value="<?=$row["emloyeeId"]?>">
        <table width="446" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="155">Name</td>
                <td width="271"><input type="text" name="tName" id="tName" value="<?=$row["employeeName"]?>"></td>
            </tr>
            <tr>
                <td width="155">Phone</td>
                <td><input type="text" name="tPhone" id="tPhone" value="<?=$row["employeePhone"]?>"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <label for="a1">Male</label>
                    <input type="radio" name="rGenre" id="a1" value="0" <?=$row["genre"]==0?"checked":""?>>
                    <label for="a2">Female</label>
                    <input type="radio" name="rGenre" id="a2" value="1" <?=$row["genre"]==1?"checked":""?>>
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="tImage" id="tImage" value="<?=$row["employeePicture"]?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button1" id="button1" value="Submit">
                    &nbsp;&nbsp;
                    <input type="reset" name="button2" id="button2" value="Reset">
                </td>
            </tr>

        </table>

    </form>
</body>
</html>