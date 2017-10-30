<?php
    $n = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $n3 = $_POST['numero3'];
     
     $i=0;
      $aux;  
      $aux = 0;
      while ($i < $n){
        if ($aux % $n2 == 0 || $aux % $n3 == 0){
            echo $aux;
            $i++;
        }
        $aux++;

        return $aux;
    }
?>
