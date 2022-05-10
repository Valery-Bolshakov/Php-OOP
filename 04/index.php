<?php

error_reporting(-1);
require_once 'Car.php';

/** Методы __construct и __destruct */

/* Специальный метод __construct (если он написан в классе)
 - вызывается сразу при создании нового экземпляра класса*/

$car1 = new Car('черный', 4, 180, 'volvo');  // все аргументы передаются в __construct
$car2 = new Car('синий', 4, 200, 'bmw');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

//Вызов метода констракт вручную
//$car1->__construct('синий', 4, 200, 'bmw');

/*Красивый вывод массива данных*/
/*function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}*/
//debug($car1->getCarInfo());

$car1->getLorem();

/* написать класс который будет что то записывать в файл
класс открывает файл - записывает информацию - закрывает файл
реализовать конструктор и деструктор. В конструкторе будет открываться
файл для записи, в деструкторе - закрываться*/
// http://ie2.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples


