<?php
error_reporting(E_ERROR| E_WARNING | E_PARSE | E_NOTICE);
if(isset($_POST['login']) AND isset($_POST['password'])){
   $login=$_POST['login'];
   $password=$_POST['password'];
   if($login=='login' AND $password=='password'){
      include('views/login.php');
   }else{
      include('views/error.php');
   }
}
else{
   include('views/form.php');
}