    <?php

        $num = $_POST['num'];
        $factorial = 1;
        for ($i=1; $i <= $num; $i++) { 
            $factorial = $factorial * $i;
        }

        echo "  <script>
                    alert('Resultado factorial = $factorial');
                    window.location.href = 'http://localhost/Taller1/punto9.html';
                </script>"
    ?>