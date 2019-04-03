<?php
  $a = 9;
  switch ($a){
    case "($a<15 && $a>=0)":
	  function pullout($a){
		  echo $a."<br>";
      if ($a==15){
		     return;
      }
		  return pullout($a+1);
	  };
	  break;
	default: 
	  echo "Введите значение от 0 до 15";
  }
?>