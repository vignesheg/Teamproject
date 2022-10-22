<?php
ob_start();
session_start();;

session_unset();

setcookie('emailcookie',$_POST['gmail'],time()-3600,'/');
setcookie('passwordcookie',$_POST['password'],time()-3600,'/');

header('location:login.php');

ob_end_flush();

?>