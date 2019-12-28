<?php

$n = 10;
$space = $n - 1;

echo '<pre>';
for ($k = 1; $k <= $n; $k++) {
    for ($c = 1; $c <= $space; $c++) {
        echo "&nbsp";
    }
    $space--;

    for ($c = 1; $c <= 2 * $k - 1; $c++) {
        echo "*";
    }
    echo "<br>";
}

$space = 1;
for ($k = 1; $k <= $n - 1; $k++) {
    for ($c = 1; $c <= $space; $c++) {
        echo "&nbsp";
    }
    $space++;

    for ($c = 1; $c <= 2 * ($n - $k) - 1; $c++) {
        echo "*";
    }
    echo "<br>";
}
echo '</pre>';
