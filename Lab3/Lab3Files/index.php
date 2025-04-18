<?php

// номер 2
file_put_contents('test.txt', "12345");

// номер 3
$fs = ['1.txt', '2.txt', '3.txt'];
$out = "";

foreach ($fs as $f) {
    if (file_exists($f)) {
        $out .= file_get_contents($f);
    } else {
        echo "Файл $f не найден";
    }
}

file_put_contents('new.txt', $out);

// номер 4
$fs = ['1.txt', '2.txt', '3.txt'];

foreach ($fs as $f) {
    if (file_exists($f)) {
        $txt = file_get_contents($f);
        $txt .= "!";
        file_put_contents($f, $txt);
    } else {
        echo "Файл $f не найден";
    }
}

// номер 5
$cf = 'count.txt';

if (file_exists($cf)) {
    $n = (int)file_get_contents($cf);
} else {
    echo "Файл $cf не найден";
}

$n++;
file_put_contents($cf, $n);

// номер 6
$tf = 'test.txt';

if (file_exists($tf)) {
    $x = (int)file_get_contents($tf);
} else {
    echo "Файл $tf не найден";
}

$x = $x * $x;
file_put_contents($tf, $x);