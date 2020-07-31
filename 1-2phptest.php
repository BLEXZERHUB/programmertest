<?php
$max = 5;

for ($i = 0; $i < $max; $i++) {
    for ($j = 0; $j < $max * 2; $j++) {
        if ($i >= $max - $j - 1 && $max - $i <= 2* $max - $j - 1)
            echo "O";
        else
            echo "&nbsp;&nbsp;";
    }
    echo "<br>";
}
