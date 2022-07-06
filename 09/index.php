<?php
/** Урок 9. Модификаторы доступа */


error_reporting(-1);
require_once 'classes/Product.php';
//require_once 'app/NotebookProduct.php';
require_once 'classes/BookProduct.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/* создаем объекты(экземпляры) соответствующих классов */
$book = new BookProduct('Три мушкетера', 20,  700);

/* Распечатаем получившиеся объекты */
debug($book); /* BookProduct Object (
 [numPages] => 700
 [name] => Три мушкетера
 [price] => 20
 [public] => PUBLIC
 [protected:protected] => PROTECTED
 [private:Product:private] => PRIVATE
 )*/
echo $book->getDiscount() . ' - можно посмотреть скидку и Вне класса';

/* Вызываем метод getProduct и смотрим какие строки он сформировал */
echo $book->getProduct();  // О товаре: Наименование: Три мушкетера Цена со скидкой: 19; Кол-во страниц: 700
// Старая цена товара: 20; Размер скидки: 5%


//    свойство доступено ВНЕ класса
//var_dump($book->public);  // string(6) "PUBLIC"

//Вне класса данные свойства не доступны
//var_dump($book->protected); - данное обращение вызовет ошибку
//var_dump($book->private); - данное обращение вызовет ошибку






