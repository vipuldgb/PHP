<?php
 $user = array(
    "name" => "Vipul",
    "surname" => "Tapare",
    "age" => 23,
    "gender" => "Male"
 );

 echo "age is: {$user["age"]}<br>";
 echo "gender is: {$user["gender"]}<br>";
 echo "name is: {$user["name"]}<br>";
 
foreach($user as $u => $y){
    echo "$u : $y <br>";
}
?>