<?php
error_reporting(-1);
require_once 'Car.php';

/** Методы объекта */

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'красный';
$car1->brand = 'volvo';

$car2 = new Car();
$car2->color = 'черный';
$car2->brand = 'bmw';

/* К методам обращаются так же как и к свойствам. При обращении происходит вызов этого метода*/
echo $car1->getCarInfo();  // вызов метода getCarInfo() для объекта $car1
echo $car2->getCarInfo();  // Информация об авто: Марка: bmw Цвет: черный Кол-во колес: 4 Скорость: 180






