<?php

  function getGCF($a, $b){

    if ($b == 0) {
      return $a;
    }else {
      return getGCF($b, $a % $b);
    }

  }

  function getLCM($a, $b) {
    return ($a * $b) / getGCF($a, $b);
  }


 ?>


<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>GCF and LCm</title>
   </head>
   <body>
     <h2>GCF and LCF callculation</h2>

     <?php 
        if (!isset($_POST['submit'])) {
         //if the form not submitted 
      ?>
     <form method="post" action="GcfandLcm.php">
       Enter your Two integer</br>
       <input type="text" name="num_1" size="3"><br><br>
       <input type="text" name="num_2" size="3"><br><br>
       <input type="submit" name="submit" value="Submit">
     </form>
    <?php 
      } else{


        //if submit the process will be start form here
       $num1 = $_POST['num_1'];
       $num2 = $_POST['num_2'];
       
       echo "You entered: $num1, $num2";
       echo "<br>";
       echo "The GCF of ($num1, $num2) is " .getGCF($num1, $num2);
       echo "<br>";
       echo "The LCM of ($num1, $num2) is " .getLCm($num1, $num2);
      }
      


     ?>

   </body>
 </html>
