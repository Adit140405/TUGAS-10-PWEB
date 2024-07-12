<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height = intval($_POST["height"]);

        if ($height > 0) {
            for ($i = 1; $i <= $height; $i++) {
                for ($j = $height; $j > $i; $j--) {
                    echo "&nbsp;&nbsp;";
                }
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                echo "<br>";
            }
        } else {
            echo "Tinggi harus lebih besar dari 0";
        }
    }
    ?>