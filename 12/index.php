<?php
/** Урок 12. Автозагрузка и пространства имен */

use classes\BookProduct;
use classes\interfaces\iGadget;
use classes\NotebookProduct;

error_reporting(-1);


/** Создали функцию для автозагрузки классов из указанной дирректории */
function autoloder1($class)
{
//    меняем в названии файла обратный слеш на прямой, что бы код работал на линуксе
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
//    проверим наличие нужного класса (file_exists()) и подключаем его, если он еще не был подключен
    if (file_exists($file)) {
        require_once $file;
    }
}

/** Создали функцию для автозагрузки интерфейсов из указанной дирректории */
/*function autoloder2($class)
{
    $file = __DIR__ . "/classes/interfaces/{$class}.php";
//    проверим наличие нужного класса (file_exists()) и подключаем его, если он еще не был подключен
    if (file_exists($file)) {
        require_once $file;
    }
}*/

/** spl_autoload_register('func', true, true); - третий параметр отвечает за очередность загрузки функций*/

// В качестве первого параметна необходимо записать имя функции которую необходимо зарегестрировать
spl_autoload_register('autoloder1');
//spl_autoload_register('autoloder2');


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


function offerCase(iGadget $product)  // подключили Интерфейс iGadget для проверки класса
{
    echo "<p>Какой то ноутбучный продукт... {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 700);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');


offerCase($notebook);  // Какой то продукт...Dell

/* Распечатаем получившиеся объекты */
debug($book);  // BookProduct Object...

echo $book->getProduct();  // О товаре:...










