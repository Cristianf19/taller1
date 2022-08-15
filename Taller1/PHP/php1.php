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
        1.	Determinar el Salario Total a pagar a un empleado teniendo como entradas el salario por hora 
        normal, el salario por hora extras y el número de horas semanales trabajadas. 
        El empleado trabaja normalmente 40 horas semanales, cada hora por encima de las 40 normales se 
        considera hora extra.  Tenga en cuenta que al empleado se le debe descontar  el  10%  por  concepto  
        de pensión y  15% por concepto de salud 
    */

        $salario_hora = $_POST['salario_hora'];
        $salario_hora_extra = $_POST['salario_hora_extra'];
        $numero_hora = $_POST['numero_hora'];

        if($numero_hora > 40){
            $salario_final = $salario_hora * 40;
            $numero_hora = $numero_hora - 40;
            $salario_final = $salario_final + ($salario_hora_extra * $numero_hora);

            
        }else{
            $salario_final = $salario_hora * $numero_hora;
        }

        $salario_final = $salario_final - ($salario_final * 0.25);

        echo "
            <script>
                alert ('El salario final es: $salario_final pesos.');   
                window.location.href = 'http://localhost/Taller1/punto1.html';
            </script>
        ";



    ?>
</body>
</html>