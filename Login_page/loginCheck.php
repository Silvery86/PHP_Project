 <?php 
    if(isset($_SESSION["logined"])== false || $_SESSION["logined"]== "")
{
?>
        <h3 style="color:red"> You are not login <h3>
        <a href="Login.php"> Please Login </a>
<?php
    die("<h2>Quit</h2>");
}
?>

