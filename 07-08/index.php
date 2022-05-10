<?php
error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

/** Наследование. Часть 1 */

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/* создаем обьект $book класса Product */
$book = new BookProduct('Три мушкетера', 20,  700);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

/* Распечатаем получившиеся объекты */
debug($book);  // Product Object ( [name] => Три мушкетера [price] => 20  [cpu] =>   [numPages] => 1000 )
debug($notebook);  // Product Object ( [name] => Dell [price] => 1000  [cpu] => 10  [numPages] => )

/* Вызываем метод getProduct и смотрим какие строки он сформировал */
echo $book->getProduct();  // О товаре: Наименование: Три мушкетера Цена: 20 Кол-во страниц: 1000
echo $notebook->getProduct();  // О товаре: Наименование: Dell Цена: 1000 Процессор: 10


