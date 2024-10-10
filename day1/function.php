<?php

//    ------------ Passing value with its reference ------------- //
   function reference(&$num)
   {
     $num++;
   }

   function printValue($num)
   {
      echo $num;
   }

   $num = 1;
   
   for($i = 1 ; $i<=5 ; $i++){
    printValue($num);
    reference($num);
    
   }

?>