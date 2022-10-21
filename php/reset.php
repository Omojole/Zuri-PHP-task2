<?php
declare(strict_types=1);
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword =$_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
$file=fopen('../storage/users.csv','r');
$temp=fopen('../storage/temp.csv','w');
$count=0;
while(($get=fgetcsv($file))!==false){
    if($get[1]==$email){
        $get[2]=$newpassword;
        $count++;
    }
    fputcsv($temp,$get);
}
fclose($file);
fclose($temp);
unlink('../storage/users.csv');
rename('../storage/temp.csv','../storage/users.csv');
if($count>0){
    echo '<h1>User registered sucessfully</h1>';
}else{
    echo '<h1>User does not exist</h1>';
}
}




?>
