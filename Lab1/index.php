<?php

    echo"Тема 1) ";
    $a=27;
    $b= 12;
    $c= ($a ** 2 + $b ** 2) ** 0.5;
    echo(round($c,2))."<br/>";

    echo" Тема 2) ";
    $not_take_risks = 'Кто не рискует';
    $not_drink = 'не пьет';
    $ellipsis = '...';
    print_r("{$not_take_risks}, тот {$not_drink} {$ellipsis}");
    echo"<br/>";

    echo" Тема 3) ";
    $a=4;
    $b= 3;
    $c= 'мандаринок';
    $a=strval($a*$b);
    echo($a.' '.$c)."<br/>";

    echo" Тема 4) ";
    $b = -12;
    $c= -27;
    if ($b>0 and $c>0){
        echo($c**2).' '.( $b**2)."<br/>";
    }
    elseif ($b<0 and $c<0){
        echo($c+$b)."<br/>";
    }
    else{
        echo($c*$b)."<br/>";
    }

    echo " Тема 5) ";
    $a=1;
    $s=$a;
    for ($i=1; $i<5; $i++ ){
        $a++;
        $s+=$a;
    }
    echo($s)."<br/>";
   

    