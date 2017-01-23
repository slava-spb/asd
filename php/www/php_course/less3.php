<?php

	function  sayHello()
	{
		echo 'Hello!';
	}

	function getHello($name)
	{
	    $name .= 555;
        return	'Hello' . $name . '!';
	}
	sayHello();
    $name = 'Bill';
	var_dump(getHello('Linus'));
	var_dump (getHello($name));


    function superPow($number, $pow = 2)
    {
    return pow($number, $pow);
    }


    function sum(...$numbers)
    {
        foreach ($numbers as $n){
            $summa = $n;
        }
        return $summa;
    };

$arr = [5,6,5,48,55];

try {
    var_dump(
        //superPow(),
        superPow(2),
        superPow(2, 3),
        sum(8, 2),
        sum(...$arr)
    );
} catch (Error $e){
    echo $e->getMessage(), PHP_EOL;
}
finally {
    echo  'Выполнился блок finally', PHP_EOL;
}
// part II

include 'less1.php';
include_once 'less1.php';
require 'less1.php';
require_once 'less1.php';
