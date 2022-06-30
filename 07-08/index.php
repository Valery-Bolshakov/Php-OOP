<?php

/** Наследование. Часть 1 - 2 */

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/* создаем объекты(экземпляры) соответствующих классов */
$notebook = new NotebookProduct('Dell', 1000, 'Intel');
$book = new BookProduct('Три мушкетера', 20,  700);

/* Распечатаем получившиеся объекты */
debug($notebook);  // NotebookProduct Object ( [cpu] => Intel [name] => Dell [price] => 1000 )
debug($book);  // BookProduct Object ( [numPages] => 700 [name] => Три мушкетера [price] => 20 )

/* Вызываем метод getProduct и смотрим какие строки он сформировал */
echo $notebook->getProduct();  // О товаре: Наименование: Dell Цена: 1000 Процессор: 10
echo $book->getProduct();  // О товаре: Наименование: Три мушкетера Цена: 20 Кол-во страниц: 1000


