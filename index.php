<?php
  $actualSalary = 1000;

  require_once('./functions.php');
  echo "El aumento de un 2% del sueldo de ".$actualSalary." Euros es ".incrementSalary( $actualSalary)." Euros";
?>
