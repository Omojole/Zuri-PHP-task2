<?php
declare(strict_types=1);
if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];

loginUser($username, $password);

}

function loginUser($username, $password){
    $file=fopen('../storage/users.csv','r');
    while(!feof($file)){
        $get=fgetcsv($file);
        if($get[1]!=$username || $get[2]!=$password){
            header('Location:../forms/login.html');
            exit();
        }
        else{

            header("Location:../dashboard.php");
            exit();
        }
    }
    }
    fclose($file);




?>
