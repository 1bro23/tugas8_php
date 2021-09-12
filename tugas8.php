<?php
for ($j=0;$j<2;$j++){
  $b=0;
  while ($b<=10){
    $a=0;
    while ($a <= 6) {
      for ($i=$b; $i <10 ; $i++) {
        echo "_";
      }
      for ($i=10-$b; $i <10 ; $i++) {
        echo "xx";
      }
      for ($i=$b; $i <10 ; $i++) {
        echo "&nbsp ";
      }
      echo "&nbsp";
      $a++;
    }
    echo "</br>";
    $b++;
  }

  $b=9;
  while ($b>=0){
    $a=0;
    while ($a <= 6) {
      for ($i=$b; $i <10 ; $i++) {
        echo "_";
      }
      for ($i=10-$b; $i <10 ; $i++) {
        echo "xx";
      }
      for ($i=$b; $i <10 ; $i++) {
        echo "&nbsp ";
      }
      echo "&nbsp";
      $a++;
    }
    echo "</br>";
    $b--;
  }
}


 ?>
