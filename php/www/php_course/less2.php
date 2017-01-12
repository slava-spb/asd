<?php
//isset - проверка наличия.

if (isset($a))
{$b = $a**2;}
else {$b=0;}
$b = isset($a) ? $a**2: 0;


$arr=[1,2,3,4];
$arr[10]=11;
$arr[]=21;

foreach ($arr as $value){
    echo  "$value\n";
}
foreach ($arr as $key => $value){
        echo  "$key - $value\n";
}

$post = [
    'title' => 'Запись 1',
    'created' => date('Y-m-d H:i:s'),
    'content' => 'Текст записи',

];
$post[$key];

