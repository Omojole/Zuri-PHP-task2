<?php
declare(strict_types=1);
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
loginUser($email, $password);

}
function loginUser($email, $password){
    $file=fopen('../storage/users.csv','r');
    while(!feof($file)){
        $get=fgetcsv($file);

            if($get[1]==$email && $get[2]==$password){
                $_SESSION['username']=$get[0];
                header("Location:../dashboard.php");
                exit();
            }
           else{
            header('Location:../forms/login.html');
           } 
        }

    fclose($file);
        }

?>
