    <?php

        $num = $_POST['num'];
        $suma = 0;
        for ($i=0; $i <= $num; $i++) { 
            $suma = $i + $suma;
        }

        echo "  <script>
                    alert('Resultado = $suma');
                    window.location.href = 'http://localhost/Taller1/punto8.html';
                </script>"
    ?>