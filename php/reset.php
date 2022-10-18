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
if($get[1]==$email){
    $get[2]==$newpassword;
   $updated= fopen('../storage/users.csv','w');
    fputcsv($updated,$get);
    fclose($updated);
exit();
}
    }
    print('User does not exist');

}








?>
