<?php
    // Простые( скалярные)
    // int - целое число
    // float - дробное число(число с плавающей точкой)
    // bool - логическое значение
    // str - строки

    // Cоставные (сложные)
    // array -массивы
    // object - обьекты

    // Специальные (служебные)
    // resource - ресурсы
    // null - пустота
    // void - ничто

    // Мат. операторы
    // +  -   *  /  %  **
    // Операторы сравнения
    // <  >  <=   >=  ==  === !=  <>
    // Лог. операторы
    // &&  ||  and  or  !
    // Инкремент, декремент
    // ++ --  ()
    // Стр.
    // .
    // Операторы присваивания
    //=  +=  -=  *=  /=

    // ,  [ ]


    $a = 123.5;
    $str1 = 'Hello world!' . $a . "\n";
    $str2 = "Hello world! $a \n";

    $arr1 = [1, 2.5, 3, true, null, 'test'];

    $person = new StdClass();
    $person->firstname = 'Ваня';
    $person->lsatname = 'Петрович';
    $person->age = 55;

    //$fp = fopen('hellow.php', 'r');
    //var_dump($fp);
    //fclose($fp);

    //echo $str2;
    //echo $str1;

    var_dump($person);

    $b = '123a';
    var_dump($b);
    $b = (int) $b;
    var_dump($b);

    var_dump(is_string($b));

    const DEBUG = true;
    echo  DEBUG;