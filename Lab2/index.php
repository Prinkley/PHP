<?php

echo"1) ";
$m = ['a','b','c','b','a'];
$c=array_count_values($m);
print_r($c);
echo"<br/>";

echo"2) ";
$m = [1,2,3,4,5];
$a = array_reverse($m);
print_r($a);
echo"<br/>";

echo"3) ";
$m = [1,2,3,4,5];
$a = array_product($m);
print_r($a);
echo "<br/>";

echo"4) ";
$m = [ 'a'=>1, 'b'=>2, 'c'=>3];
$a = array_rand($m);
print_r($a);
echo "<br/>";

echo"5) ";
$m =  ['a', '-', 'b', '-', 'c', '-', 'd'];
$a = array_search('-',$m );
print_r($a);
echo '<br/>';
