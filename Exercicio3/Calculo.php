<?php
    $n = $_POST['numero'];
     function calculoTriangular($n)
     {
        
        for($i=1;$i * ($i + 1) * ($i + 2)<=$n;$i++)
        {
            if($i * ($i + 1) * ($i + 2) == $n)
            {
               $aux = 0;
            }
            else
            {
               $aux = 1;
            } 
        }
        return $aux;
    }
    
    $triangulo = calculoTriangular($n);

    if(!$triangulo){
        echo "O número é triangular";
    }else {
        echo "Esse número não é triangular";
    }
?>
