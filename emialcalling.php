<?php
$loginbutton=$_POST["LOGIN"];
$registeringbutton=$_POST["registering"];
$email=$_POST["email"];
$password=$_POST["password"];
$submit=$_POST["submit"];
if (isset($registeringbutton)){
    header("location:REGISTER.php");

}

?>