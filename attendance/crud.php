<?php
//IMPORT DB CONNECTION
$db=require("dbconfig.php");
// $db=new pdo("mysql:host=localhost;dbname=attendance","root","");
if ($_SERVER['REQUEST_METHOD']=='POST') {
    # code...
$username=$_POST['username'];
$email=$_POST['email'];
//password hash
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$stmt=$db-> prepare("INSERT INTO users (user_name,u_email,u_password ) VALUES (?, ?,?)");
$stmt->execute([$username,$email,$password]);
echo"user registered successfully";
}
?>