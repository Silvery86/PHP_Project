<?php
session_start();
require("loginCheck.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang admin</title>
</head>
<body>
    <h2>Admin page</h2>
    <h3> Hello <?=$_SESSION["user"]?> </h3>
    <h3> Hello <?=$_SESSION["fullname"]?> </h3>
    <a href="Logout.php"> LOGOUT </a>
</body>
</html>