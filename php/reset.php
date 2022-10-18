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
    $newInfo=[$email,$newpassword];
    fopen('../storage/users.csv','w');
    fputcsv($file,$newInfo);
    fclose($file);
exit();
}else{
    print('User does not exist');
}
    }
}

?>
