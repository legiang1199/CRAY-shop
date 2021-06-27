<?php
session_start();
include 'database.php';
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "SELECT * FROM user where name = '$username' AND password ='$password' ";

$result = mysqli_query($conn, $sql);
//var_dump($result);
//die();
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);// w3

if($count == 0){
    echo '<script language="javascript">alert("Password or username incorrect !!! try again!!"); window.location="login.php";</script>';

}
else{
    $_SESSION['login_user'] = $row['name'];
    header('location: index.php');
}
?>