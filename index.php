<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chess</title>
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--css-->

    <!--js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!--js-->
</head>
<body>
     <table class=" mx-auto p-relative "   style="margin: 7.5% 0;">

<?php
   //**randomly generate a row and a col **//
    $randCol = random_int(1,8);
    $randRow = random_int(1,8);
   //**randomly generate a row and a col **//

   //**define bottom-up moves **//
     $a = $randCol-1; $b = $randCol+1;
     $c = $randCol-2; $e = $randCol+2;
   //**define bottom-up moves **//


   //**if there is a move up and down; define moves left and right **//
     if(isset($a)){$x = $randRow - 2;$y = $randRow + 2;}
     if(isset($b)){$w = $randRow - 2;$z = $randRow + 2;}
     if(isset($c)){$q = $randRow - 1;$r = $randRow + 1;}
     if(isset($e)){$s = $randRow - 1;$o = $randRow + 1;}
   //**if there is a move up and down; define moves left and right **//


/****************************board**********************************/
     for($row=1; $row<=8; $row++){
          echo "<tr>";
             for($col=1; $col<=8; $col++){
                $area = $row + $col;
                $horsePlace =$randCol+$randRow;
                   if ($area % 2 == 0) {
                          if($randCol === $col && $randRow===$row){
                              echo "<td height=80px width=80px bgcolor=green><img src='horse.png' class='ml-2' width='64px'></td>";

                          }
                          elseif (
                              $a === $col && $x===$row || $a === $col && $y===$row
                            ||$b === $col && $w===$row || $b === $col && $z===$row
                            ||$c === $col && $q===$row || $c === $col && $r===$row
                            ||$e === $col && $s===$row || $e === $col && $o===$row

                          ){
                              echo "<td height=80px width=80px bgcolor=#ff0000></td>";
                          }

                          else{
                              echo "<td height=80px width=80px bgcolor=#FFFFFF></td>";

                          }


                      }
                   else {
                          if( $randCol === $col && $randRow===$row){
                              echo "<td height=80px width=80px bgcolor=#008000><img src='horse.png' class='ml-2'  width='64px'></td>";
                          }
                          elseif (
                                $a === $col && $x===$row || $a === $col && $y===$row
                              ||$b === $col && $w===$row || $b === $col && $z===$row
                              ||$c === $col && $q===$row || $c === $col && $r===$row
                              ||$e === $col && $s===$row || $e === $col && $o===$row
                          ){
                              echo "<td height=80px width=80px bgcolor=#ff0000></td>";
                           }
                          else{
                              echo "<td id='td' height=80px width=80px bgcolor=#000000></td>";
                           }
                      }
             }
                 echo "</tr>";

 /****************************board**********************************/

         }

?>

     </table>
</body>
</html>
