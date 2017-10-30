<?php
    $n = $_POST['numero'];
     function calculoPerfeito($n)
     {
        $soma = 0;
        for($i=1;$i < $n;$i++)
        {
            if(($n % $i) == 0)
            {
               $soma = $soma + $i;
            }
        }

        if($soma == $n){
            return true;
        }
        else
        {
            return false;
        }
       
    }
    
    $perfeito = calculoPerfeito($n);
    var_dump($perfeito);
    
    if($perfeito)
    {
        echo "O número é perfeito";
    }
    else 
    {
        echo "Esse número não é perfeito";
    }
?>
