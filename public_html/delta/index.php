<?php
error_reporting(E_ERROR| E_WARNING | E_PARSE | E_NOTICE);
if(isset($_GET['a']) AND 
isset($_GET['b'])AND 
isset($_GET['c']))
{
    if(is_numeric($_GET['a']) AND is_numeric($_GET['b']) AND is_numeric($_GET['c'])){
       $a = $_GET['a'];
       $b = $_GET['b'];
       $c = $_GET['c'];


       $delta= $b * $b - 4 * $a * $c;
      if($delta>0){
         $x1 = (-$b - sqrt($delta))/ 2 * $a;
         $x2 = (-$b + sqrt($delta))/ 2 * $a;

         include('views/delta-greater.php');
   }
   elseif($delta == 0){
      $x = (-$b )/ 2 * $a;
   }
   else
      $komunikat = 'Równanie nie posiada miejsc zerowych';
    }else{
       include('views/error.php');
    }

}else{
include('views/form.php');}