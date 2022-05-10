<?php
error_reporting(-1);
require_once 'Car.php';

/** Константы класса. Статические свойства и методы */

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

/** Можно обращаться к свойству класса не создавая объект */
echo Car::$countCar;  // 0
echo '<br>';

//создаем объект
$car1 = new Car('черный', 4, 180, 'volvo');

/** Обращение к статическому методу */
echo Car::getCount();  // 1
echo '<br>';

$car2 = new Car('черный', 4, 200, 'bmw');

/** Обращение к статическому методу */
echo Car::getCount();// 2

echo $car1->getCarInfo();
echo $car2->getCarInfo();

/** Нестатические методы можно вызывать Статически */
//echo $car1::Test();  // непроканает
//echo Car::Test();  // непроканает

/** Константы: */
/* константы нужны для хранения неизменяемой информации, например настройки соединения с БД */

echo $car1->getPrototypeInfo();  // Данные тестового авто: Наименование: Прототип Скорость: 300

echo Car::TEST_CAR_SPEED;  // 300

/* константа class выводин название класса */
//echo Car::class;  // Car
