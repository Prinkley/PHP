<?php
//1
echo preg_replace('/(\d)/', '$1$1', 'a1b2c3');

//2
echo preg_match('/^(https?:\/\/)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,6}(:[0-9]{1,5})?(\/.*)?$/i', 'http://site.ru');

//8
preg_match_all('/\b(\w)\1+\b/', 'aaa bcd xxx efg', $matches);

print_r($matches[0]); 

//11
echo preg_replace('/([a-zA-Z0-9]*)@([a-zA-Z0-9]*)/', '$2@$1', 'aaa@bbb eee7@kkk');

//15
echo preg_replace('/a\\\\a/', '!', 'a\a abc');