<?php
/**
 * Created by PhpStorm.
 * User: Иван
 * Date: 12.01.2017
 * Time: 19:10
 */

if ($a > $b) {}

//хороший вариант if
if (!connect())
{
    "show error";
    exit();
}

if (!select_db())
{
    "show error";
    exit();
}

if (!query())
{
    "show error";
    exit();
}

// || работает быстрее &&

//тернарный оператор
if (isset($a))
{
    $b = $a ** 2;
}
else
{
    $b = 0;
}

$b = isset($a) ? 2 : 0;

function sun($a)
{
    $a = $a ?: calcvalue();
}

$a = isset($a) ? $a : 'default';
//в PHP 7
$a = isset($a) ?? 'default';
$a = $b ?? $c ?? $d;

//switch - ЭТО ЗЛО !!!
switch ($key)
{
    case 1:
        break;
    default:
        break;
}

switch (true)
{
    case is_int($key):
        break;
    case is_float($key);
        break;
}

//Циклы
$i = 0;
while($i <= 10)
{
    ++$i;
}

for ($i = 0, $j = 0; $i < 0, $i < 0; ++$i, ++$j)
{
    echo $i, $j;
}

//у break можно указывать уровни выхода

//Массивы
$arr = [1, 2, 3];
$arr[10] = 12;
$arr[]=12; //index - 11

for ($i = 0, $n = count($arr); $i < $n; $i++) //count - длина массива
{
    echo "$i - $arr[$i]";
}

//для перебора массива | foreach - универсальный способ перебора всего
//foreach использует копию данных
foreach ($arr as $value)
{
    echo "$value\n";
}

//для индекса
foreach ($arr as $key => $value)
{
    echo "$key - $value";
}

//Ассоциативный массив | индексы заданы с помощью строк
$post =
    [
        'title' => 'Запись 1',
        'created' => date('Y-m-d h:i:s'),
        'content' => 'Текст записи'
    ];
//вычислить данные на ходу ($key)
$post[$key];

//так делать не нужно, но ошибки не будет
$arr2 =
[
    0 => null,
    50 => 50,
    'key' => 1,
];

//передача по ссылке, работа с оригиналом (используем &)
foreach ($arr as $key => &$value)
{
    echo "$key - $value\n";
}
?>