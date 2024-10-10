<?php
  $cars = array("Ford" , "Mustang" , "BMW" , "Bucati");
  foreach($cars as &$car)
  {
    if($car != "Mustang")
    {
        $car = "Chevrolate";
    }
  }
  

  unset($car);
  $car = "Bucati";

  var_dump($cars);
  

?>