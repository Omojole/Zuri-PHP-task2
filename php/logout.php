<?php
declare(strict_types=1);
session_start();
logout();
function logout(){
if($_SESSION){
    session_destroy();
    header('Location:../forms/login.html');
}
else{
    echo '<h1>Sorry,you are not logged in<h1>';
}
}

