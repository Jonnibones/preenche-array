<?php 

    function PreencheArray()
    {
        for ($i=1; $i <= 20; $i++) 
        { 
            $numeros[] = rand(1,10);
        }
        
        echo "Os números sorteados são: ".implode(',',$numeros)."<br><br>";
        
        $valores_contados = array_count_values($numeros);

        arsort($valores_contados);

        echo "O número que mais se repete é: ".array_key_first($valores_contados);

    }

    PreencheArray();

?>