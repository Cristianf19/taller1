    <?php
        for ($horas=0; $horas <= 23 ; $horas++) { 
            $hor = $horas;
                if ($horas < 10) {
                    $hor = "0".$horas;
                }
            for ($minutos=0; $minutos <= 59 ; $minutos++) { 
                $min = $minutos;
                if ($minutos < 10) {
                    $min = "0".$minutos;
                }
                for ($segundos=0; $segundos <= 59 ; $segundos++) { 
                    //sleep(1);
                    $sec = $segundos;
                    if ($segundos < 10) {
                        $sec = "0".$segundos;
                    }
                    echo "<p>$hor:$min:$sec</p>";
                }
            }
        }

    ?>