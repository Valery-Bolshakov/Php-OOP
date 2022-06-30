<?php

namespace classes;  // указали пространство имен для данного класса


use classes\interfaces\iGadget;

class NotebookProduct extends Product  implements iGadget
{

    /* обозначим общее свойство для данного класса */
    public $cpu;

    /**  Методы в дочерних классах перезаписывают родительские методы. И что бы подключать
     * свойства родительских - необходимо использовать конструкцию "parent::__construct($arg1, $arg2);"
     */
    /* пишем конструктор со свойствами родительского и текущего классов */
    public function __construct($name, $price, $cpu)
    {
        /** подключаем родительский конструктор со свойствами (во измежании дублирования кода) */
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    /** реализуем метод подключаемого интерфейса */
    public function getCase()
    {
        // TODO: Implement getCase() method.
    }


    /* аналогично конструктору: */
    public function getProduct()
    {
        /* подключаем родительский метод который вернёт сюда строку с параметрами */
        $out = parent::getProduct();
        /* дополняем строку */
        $out .= "Процессор: {$this->cpu};<br>";
        /* возвращаем строку */
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }

}