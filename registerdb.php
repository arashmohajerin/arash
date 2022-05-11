<?php
$dbh=new PDO("mysql:host=localhost;dbname=register","root","");
$country=$_POST["country"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$submit=$_POST["submit"];
$stmt=$dbh->prepare ("INSERT INTO `register`(`country name`, `email`, `password`, `password confirm`)
                    VALUES
                    (:country,:email,:password,:confirm)
                    ");
$stmt->bindValue(":country",$country);
$stmt->bindValue(":email",$email);
$stmt->bindValue(":password",$password);
$stmt->bindValue(":confirm",$confirm);
$result=$stmt->execute();


if(isset($submit)){
    if ($password!=$confirm){
        echo "confirm is not same with password";
        exit;
    }else{
        echo "compelet your registeration";
        header("location:LOGIN.php");
        exit;
    }
}


if ($result){
    header("location:REGISTER.php");
    exit;


}else{
    echo "ERROR PLEASE TRY ANOTHER TIME";
    header("location:REGISTER.php");
    exit;


}


?>
