    <?php

        $num = $_POST['num'];

        $num1 = 1;
        $num2 = 0;
        $sum = 0;

        for ($i=0; $i < $num; $i++) { 
            echo "<p>$sum</p>";
            $sum = $num1 + $num2;
            $num1 = $num2;
            $num2 = $sum;
        }

    ?>