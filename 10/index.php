<?php
/** Урок 10. Абстрактные классы и интерфейсы */

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';  // подключаем интерфейс
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


$book = new BookProduct('Три мушкетера', 20,  700);

/* Распечатаем получившиеся объекты */
debug($book);

echo $book->getProduct();

// Product является абстрактным классом и не дает возможности создавать объекты данного класса
/*$product = new Product('Test', 1);
debug($product);*/

// распечатаем абстрактный метод
$book->addProduct('Test', 10, 5);  // string(4) "Test" int(10) int(5)

//распечатаем метод интерфейса
$book->test();  // string(14) "test interface"



