<pre>
<?php

//declare(strict_types=1); //настройка


class Person //класс с Заглавной
{
    private $firstname;
    private $lastname;
    private $patro;

    static public $shared = 5;

    public function  __construct(
        string $firstname,
        string $lastname,
        string $patro
    ){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->patro = $patro;
    }
    public function getFullName(): string
    {
        return sprintf(
            '%s %s %s',
            $this->lastname, //получаем значение свойства
            $this->firstname,
            $this->patro
        );
    }
    static public function getInstance(...$args)//вывод всего что передадут
        //статика привязана к классу. доступ через ::
    {
        var_dump($args);
    }
}

class Developer extends Person //extends наследование
{
    //const SKILL_HTML = 'html';
    protected $skills = [];

    public function __construct($firstname, $lastname, $patro, array $skills)
    {
        parent::__construct($firstname, $lastname, $patro);// parent:: оператор разрешения области видимости
        $this->skills = $skills;
    }

}

class Team
{
    protected $members = [];

    public function addMember(Developer $developer): Team //возврат только Team
    {
        array_push($this->members, $developer);
        return $this;//Вызов addMember

    }
}

//здесь клиентский код
$person555 = new Person(1, true, 1.5);
var_dump($person555);
//exit;

$person1 = new Person('Николай','Андрианов', 'Юрьевич'); // () <--аргументы конструктора
//$person1->firstname = 'Николай'; //установка значение свойства
//$person1->lastname = 'Андрианов';
//$person1->patro = 'Юрьевич';
echo $person1->getFullName();

//echo sprintf(
 //   '%s %s %s',
 //   $person1->lastname, //получаем значение свойства
  //  $person1->firstname,
  //  $person1->patro
//);

$person2 = new Person('Иван', 'Менщиков', 'Сергеевич');
$person3 = $person1; //передаёт по ссылке

//var_dump($person1, $person2, $person3);


$developer1 = new Developer(
    'Иван',
    'Менщиков',
    'Сергеевич',
    ['html', 'css', 'js', 'php']);

$team1 = new Team();
$team1->addMember($developer1);
//$team1->addMember(45); //будет ошибка

$team1->addMember(new Developer(
    'Иван',
    'Менщиков',
    'Сергеевич',
    ['html', 'css', 'js']));
var_dump($team1);

var_dump($developer1);

echo $developer1->getFullName();

Person::getInstance(1, true, 'Hello world');
$developer1->getInstance(4564564);

var_dump(Developer::$shared); //!!! shared - без $ определит как костанту

Person::$shared = 6;

var_dump(
    $developer1::$shared, //:: <- получаем свойства
    $person1::$shared,
    $person2::$shared
);



class A
{
    static protected $a =1;
    static public function getA()
    {
        return static::$a;
    }
}

class B extends A
{
    static protected $a =2;
}

var_dump(
    A::getA(),
    B::getA()
);

?>
</pre>