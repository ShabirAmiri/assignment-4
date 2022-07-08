
<?php
 $number=empty($_POST["number"])?1:$_POST["number"];
 ?>
  
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Write a PHP Program to Print Table of a Number - Code4Example</title>
     <link rel="stylesheet" href="./style.css" media="screen"
 </head>
 <body>  
     <form action="" method="post">
     <input type="text" name="number" value="<?=$number?>" placeholder="ex:3">
     <button type="submit">Calculate</button>
     </form>
     <?php echo $number ; ?>
     
     <table border="1" width="400">
     <?php  for($i=0;$i<=10;$i++){ ?>
         <tr>
             <td><?=$i?></td>
             <td>x</td>
             <td><?=$number?></td>
             <td>=</td>
             <td><?=$i*$number?></td>
         </tr>
     <?php  } ?>
     </table>
     <a href="./rectangle.php">Go to Rectangle</a>
     <a href="./calculater.php">Go to Calculater</a>
 </body>
 </html>