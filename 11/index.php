<?php
/** Урок 11. Интерфейсы и контроль типа */

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';  // подключаем интерфейс
require_once 'classes/iGadget.php';  // подключаем интерфейс
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

/** реализация Интерфейса + контроль типа взодящих параметров: */
/* создали метод для работы ТОЛЬКО с экземплярами класса NotebookProduct
Но что бы избежать использование этого метода для работы с экземплярами других классов - устанавливаем проверку
с помощью Интерфейса iGadget. Для этого создаем соотв интерфейс и подключаем его к классу NotebookProduct.
И далее в параметрах функции дописываем созданный Интерфейс в качестве проверки что входящие параметры
могут быть ТОЛЬКО объекты класса NotebookProduct (где подключен интерфейс iGadget) */
function offerCase(iGadget $product)  // подключили Интерфейс iGadget для проверки класса
{
    echo "<p>Какой то ноутбучный продукт... {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20,  700);
$notebook = new NotebookProduct('Dell',  1000, 'Intel');

//var_dump($notebook instanceof iGadget);  // bool(true)

offerCase($notebook);  // Какой то продукт...Dell
//offerCase($book);  // выдаст ошибку так как объект не является экземпляром класса NotebookProduct

/* Распечатаем получившиеся объекты */
debug($book);  // BookProduct Object...

echo $book->getProduct();  // О товаре:...

echo '<hr>';

class A {}
class B extends A {}
class C {}

$a = new A();
$b = new B();
$c = new C();

// оператор instanceof проверяет является ли объект $a экземпляром класса A (возвращает true or false)
//var_dump($a instanceof A);  // bool(true)

/** класс B наследует класс A => объект $b будет экземпляром обоих классов */
var_dump($b instanceof A);  // bool(true)
var_dump($b instanceof B);  // bool(true)






