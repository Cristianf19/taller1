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
        2.	Ingresar el valor temperatura de cada día durante  una semana, calcular su promedio y mostrar los siguientes mensajes en pantalla: 
            	Si el promedio es mayor a 35 grados mostrar el mensaje "Que semana Tan Calurosa" 
            	Si el promedio esta entre 15 y 35 Grados mostrar el mensaje "Que clima tan delicioso 
            	si el promedio es menor a 15 grados mostrar el mensaje "Que semana tan fría" 

    */

        $lunes = $_POST['lunes'];
        $martes = $_POST['martes'];
        $miercoles = $_POST['miercoles'];
        $jueves = $_POST['jueves'];
        $viernes = $_POST['viernes'];
        $sabado = $_POST['sabado'];
        $domingo = $_POST['domingo'];

        $prom_temperatura = ($lunes + $martes + $miercoles + $jueves + $viernes + $sabado + $domingo) / 7;
        

        if ($prom_temperatura > 35) {
            $mensaje = "Que semana Tan Calurosa";
        } elseif ($prom_temperatura > 15 && $prom_temperatura <= 35) {
            $mensaje = "Que clima tan delicioso";
        } else {
            $mensaje = "Que semana tan fría";
        }
        
        

        echo "
            <script>
                alert ('Eh avemaria $mensaje ome.');   
                window.location.href = 'http://localhost/Taller1/punto2.html';
            </script>
        ";



    ?>
</body>
</html>