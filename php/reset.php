<?php
declare(strict_types=1);
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword =$_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){





    $file=fopen('../storage/users.csv','r');
    while(!feof($file)){
      $get=fgetcsv($file);
      $arr=array($get);
if($get[1]===$email){
    $get[2]===$newpassword;
        $file= fopen('../storage/users.csv','w');
        fputcsv($file,$get);
echo '<h1>Password change successful<h1>';
        fclose($file);
        exit();
    }
}
      echo '<h1>User does not exist<h1>';

}









?>
