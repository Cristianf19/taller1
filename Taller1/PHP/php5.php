    <?php

        $num_llantas = $_POST['num_llantas'];


        if ($num_llantas > 10) {
            $precio  = $num_llantas * 20000;
            
        }else{
            if ($num_llantas >= 5) {
                $precio  = $num_llantas * 25000;
                
            } else {
                if ($num_llantas > 0) {
                    $precio  = $num_llantas * 30000;

                } else {
                    $precio = "ERROR - debe comprar minimo 1 llanta.";
                }
                
            }
            
        }


        echo "
            <script>
                alert ('El precio por la compra de $num_llantas es: $precio');   
                window.location.href = 'http://localhost/Taller1/punto5.html';
            </script>
            ";


    ?>