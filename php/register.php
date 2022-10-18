<?php
declare(strict_types=1);
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}
function registerUser($username, $email, $password){
    $file=fopen('../storage/users.csv','a');
    $data=[$username,$email,$password];
    if($file){
        fputcsv($file,$data);
        echo '<h1>User succesfully registered<h1>';
    }else{
        echo 'An error occured during registration';
    };
    fclose($file);
}

?>
