<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 1</title>
</head>
<body>
    <?php
    /*
        3.  Coldeportes requiere un aplicativo para facilitar la selección de los jugadores del equipo 
            basketball prejuvenil que representara a Colombia. Se debe tener en cuenta las siguiente 
            características: 
            
            La edad de la aspirante debe ser <= 18 años  La estatura debe de ser >=180 cm  El peso debe 
            de ser <= 80kg.  
        
            Si el aspirante cumple las tres condiciones aceptarlo, de lo contrario debe ser rechazado 
    */

        $edad = $_POST['edad'];
        $estatura = $_POST['estatura'];
        $peso = $_POST['peso'];
        $mensaje = "";

        if ($edad <= 18) {
            $mensaje = "";
        }else{
            $mensaje = $mensaje . "Edad ";
        }

        if ($peso <= 80) {
            $mensaje = "";
        }else{
            $mensaje = $mensaje . "Peso ";
        }
        
        if ($estatura >= 180) {
            $mensaje = ""; 
        }else{
            $mensaje = $mensaje . "Estatura ";
        }

        if ($mensaje == "") {
            echo "
            <script>
                alert ('El aspirante fue aceptado. $mensaje');   
                window.location.href = 'http://localhost/Taller1/punto3.html';
            </script>
            ";
        } else {
            echo "
            <script>
                alert ('El aspirante fue rechazado. Motivo: $mensaje');   
                window.location.href = 'http://localhost/Taller1/punto3.html';
            </script>
            ";
        }
        

        



    ?>
</body>
</html>