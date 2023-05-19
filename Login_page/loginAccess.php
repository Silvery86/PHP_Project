<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
</head>
<body>
    <h2> Login Access Check <h2>
    <?php
    session_start();
    $user = $_REQUEST["uUser"];
    $pass = md5($_REQUEST["uPassword"]);
    /*kết nối csdl*/
    $servername = "localhost";
    $userSQL = "root";
    $passSQL = "";
    //kết nối CSDL
        try {
        $conn = new PDO("mysql:host=$servername;dbname=Project_Web", $userSQL, $passSQL);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->query("SET NAMES UTF8");//thiết lập làm việc vởi unicode
        echo "Kết nối thành công";
        } catch(PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
        die();
        }
    //thực hiện truy vấn dữ liệu
        $sql = "SELECT * FROM users WHERE username='$user' AND userPassword='$pass'";
        $pdo_stm = $conn->prepare($sql);//gán câu sql cho đối tượng PDO Statement
        $ketqua = $pdo_stm->execute();//thực hiện câu truy vấn
        if($ketqua==FALSE)
            die("Lỗi lệnh SQL");
/*Kiểm tra đăng nhập đúng ko?*/
    if($pdo_stm->rowCount()>0) //Số bản ghi trả về >0
    {
        $row = $pdo_stm->fetch();//lấy về 1 dòng dữ liệu từ SELECT (dạng Array)
        $_SESSION["logined"] ="OK";//tạo ra biến $_SESSION["logined"]
        $_SESSION["user"] = $row["username"];//lấy giá trị cột username
        $_SESSION["fullname"] = $row["userFullName"];//lấy giá trị cột hoten từ bảng users
        echo "<h3> Đăng nhập thành công</h3>";
        echo "<a href=\"Admin.php\"> Mời vào trang Admin</a>";
    }
    else
    {
        echo "<h3> Đăng nhập KHÔNG thành công</h3>";
        echo "<a href=\"Login.php\"> Mời Đăng nhập lại</a>";
    }
?>
</body>
</html>