<?php
  $text1 = "First Line";
  $text2 = "Second Line";

  function echoFun(){
    
    //------  Printing the Statements using Double Courts ------------//
    echo "<h2>Hello There, ".  $GLOBALS['text1'] ." and this is ". $GLOBALS['text2']  ."</h2><br>";
  }

   function printFun(){
    $output = (print "Hello") ? 'Sucess' : 'Failure';
    print "<br>";
    print $output ."<br>";

    $arr = array(1,2,3,4,5,6,7);
    print_r($arr);
    
    // ----- Use of Implode to Store the Array in the Variable  -- //
    $str = array("A" , "B" , "C","D");
    print "<br>";
    $result = implode(", " , $str);
    print $result;
    print "<br>";

    //  --- Explode example --- //
    $str = "Hii I am Vipul Tapare";
    $result_arr = explode(" " , $str);
    print_r($result_arr);
   }
 // echoFun();
  printFun();

?>