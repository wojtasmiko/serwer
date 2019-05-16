<?php  
   $a=$_GET['parametra'];
   $b=3;
   $c=0;

   $delta= $b * $b - 4 * $a * $c;
      if($delta>0){
         $x1 = (-$b - sqrt($delta))/ 2 * $a;
         $x2 = (-$b + sqrt($delta))/ 2 * $a;
   }
   elseif($delta == 0){
      $x = (-$b )/ 2 * $a;
   }
   else
      $komunikat = 'Równanie nie posiada miejsc zerowych';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<form action="index.php" method="get">
   <input type="text" name='parametra'>
   <input type="submit" name='Wyślij'>
</form>
</body>
</html>