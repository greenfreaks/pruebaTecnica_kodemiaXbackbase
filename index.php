<?php error_reporting(E_ERROR); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodemia & Backbase ♥</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- MAERIALIZE -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
    
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section class="content">
        <form method= "POST">
            <div class="form">
                <h4 style="color: aqua;">Hola equipo de Kodemia </br>& Backbase</h4>
                <h6>Soy Mario Sandoval Velázquez y esta es mi prueba técnica :)</h6>
            
                <b>Ingresa el número de dimensiones que deseas que tenga tu matriz.</b>
                <input style="color: #dddd" type="number" name="dimension" class="dimension" value="<?php echo $_POST['dimension'];?>"> <br>
                <button type="submit" class="btn btn-primary" name="submit">¡Matriz!</button>
            </div>
            <div class="center matriz">
                <?php include "operacion.php"?>
            </div> <br>
            <div class="center" style="color:aqua">
                <?php
                echo "Suma de la diagonal ascendente: ". $diagonalAscendente. "</br>";
                echo "Suma de la diagonal descendente :". $diagonalDescendente;
                $resultado = $diagonalAscendente + $diagonalDescendente;
                echo "</br>";

                echo "El resultado final es: ". $resultado;
                ?> 
            </div>
        </form>           
    </section>
    
</body>
</html>