
<?php
echo '<h1>Rectangular</h1>';
function printRect($l, $w) {
    for($i=1;$i<=$l;$i++){
      for($j=1;$j<=$w;$j++){
        if($i==1 || $i==$l){
          echo "*";
        }else if($j==1 || $j==$w) {
          echo "*";
        } else {
          echo "&nbsp;&nbsp;";
        }
      }
      echo '</br>';
    }
  }

  printRect(5, 30);
  printRect(15, 50);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Write a PHP Program to Print Table of a Number - Code4Example</title>
      <style>
        body {
          background-color:silver;
        }
      </style>
 </head>
 <body>  
    
     <a href="./calculater.php">Go to Calculater</a> <br>
     <a href="./index.php">Go to Multiplication Table</a>
 </body>
 </html>