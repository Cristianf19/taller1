    <?php


        $codigo_estudiante = $_POST['cod_estud'];
        $nombre_estudiante = $_POST['nom_estud'];
        $nombre_materia = $_POST['nom_mat'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $notaFinal = ($nota1 + $nota2 + $nota3)/3;


        if ($notaFinal >= 4) {
            $estado = "APROBADO";
            
        }else{
            $estado = "REPROBADO";
        }

        
        

        echo "
            <script>
                alert ('Código del estudiante: $codigo_estudiante  Nombre del estudiante: $nombre_estudiante  Nombre de la materia: $nombre_materia  Nota final: $notaFinal  Estado: $estado');   window.location.href = 'http://localhost/Taller1/punto4.html';
            </script>
            ";


    ?>