<?php
include("connexion.php");
if (isset($_POST["submited"])) {

$name=$_POST['nameU'];
$username=$_POST['username'];
$mail=$_POST['email'];
$pass=$_POST['password'];
$confpass=$_POST['conf_password'];
$gender=$_POST['gender'];

if ($pass==$confpass) {
    $pass=md5($pass);
    $sql="INSERT INTO user (name,username,mail,pass,gender) VALUES ('$name','$username','$mail','$pass','$gender')";
    mysqli_query($connect,$sql) or die ("error sql".mysqli_error($connect));
    header("location:login.php");
}


}
?>