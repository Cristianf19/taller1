    <?php

        $num = $_POST['num'];


        for ($i = 1; $i <= 10; $i++){
            $resultado = $num * $i;
            echo "<p>$num * $i = $resultado</p><br>";
        }

        echo "  
            <a href='../punto6.html'>
                <input type='submit' value='Regresar'>
            </a>
        ";

    ?>