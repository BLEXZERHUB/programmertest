<?php
$max = 4;
for ($i = 0; $i < $max; $i++) {
    for ($j = 0; $j < $max-$i; $j++) {
        echo '&nbsp;&nbsp;&nbsp;';
    }
    for ($x = 1; $x <= $i +1; $x++) {
        echo 'O';
    }

    echo "<br>";
}
