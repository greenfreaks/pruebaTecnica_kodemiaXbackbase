<?php
error_reporting(E_ERROR);
if(isset($_POST['submit'])){
    $n_filas = ($_POST['dimension']);
    $n_columnas = ($_POST['dimension']);
    if($n_filas == "" OR $n_columnas==""){?>
        <script>
            Swal.fire(
                '¡Campo vacío!',
                'Ingresa el número de dimensiones que deseas que tenga tu matriz',
                'error'
            );
        </script>
    <?php
    }elseif($n_filas <=1 OR $n_columnas <=1){?>
        <script>
            Swal.fire(
                '¡Número inválido!',
                'Ingresa un valor mayor a "1"',
                'error'
            );
        </script>
    <?php   
    }else{

    for($i=0; $i < $n_filas; $i ++){
        for($j=0; $j < $n_columnas; $j ++){
            $matriz[$i][$j]=rand(0,9);
            echo $matriz[$i][$j].  str_repeat('&nbsp;', 10); // adds 5 spaces
            ;
        }
        // echo "<div class='divider center'></div>";
        echo "</br>"."<hr>";
        
    }

    $diagonalAscendente = 0;
    $diagonalDescendente = 0;

    for ($i = 0, $s = count($matriz) - 1; $s >= $i; $i++) {
        $diagonalDescendente += $matriz[$i][$i];
        $diagonalAscendente += $matriz[$i][$s - $i];
    }
    
    // echo "Suma de la diagonal ascendente: ". $diagonalAscendente. "</br>";
    // echo "Suma de la diagonal descendente :". $diagonalDescendente;
    // $resultado = $diagonalAscendente + $diagonalDescendente;
    // echo "</br>";

    // echo "El resultado final es: ". $resultado; 
}
}

?>