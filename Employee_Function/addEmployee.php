<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Add Employee</title>
</head>
<body>
    <h2 style="text-align:center; color: #090;">Add Employee</h2>
    <form name="form1" method="post" action="processAddEmployee.php">
        <table width="446" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="155">Name</td>
                <td width="271"><input type="text" name="tName" id="tName"/></td>
            </tr>
            <tr>
                <td width="155">Phone</td>
                <td><input type="text" name="tPhone" id="tPhone"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <label for="a1">Male</label>
                    <input type="radio" name="rGenre" id="a1" value="0" checked>
                    <label for="a2">Female</label>
                    <input type="radio" name="rGenre" id="a2" value="1">
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="text" name="tImage" id="tImage"></td>
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