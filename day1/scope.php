
<?php
//    -------- Global Scope ---------- //
   $str1 = "Global";
   function myTest(){
    global $str1;
    $str2 = "Local";
    // --------  Static Scope ---------------//
    static $count  = 0;
    // ------ Local Scope ------- //
    echo "<p>String is : $str1 is global scope variable <br></p>";
    // --------- or Other way to access the global variable in the local ------------ //
    echo "<p>String is : ".  $GLOBALS['str1'] ." is a Global Scope <br></p>";
    echo "<p>String is : $str2 is local scope variable <br></p>";
    echo $count++;
    echo "<br>";
   }

   myTest();
   myTest();
   myTest();
   myTest();
?>