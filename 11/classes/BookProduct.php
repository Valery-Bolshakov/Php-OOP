<?php


class BookProduct extends Product implements I3d
{
    /**
     * implements I3d - подключение Интерфейса
     * Необходимо реализовать ВСЕ методы подключаемого Интерфейса
     */

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;

        /** Передаем закрытое свойство discount с помощью сеттера и задаем ему любое значение */
        $this->setDiscount(5);

    }

    /** Абстрактный метод */
    /*
     * Необходимо объявить абстрактный метод из родительского класса (во избежании ошибки)
     * Область видимости дочернего метода должны либо совпадать с родительским либо быть лояльнее
     * Параметры дочернего абстракта долны либо совпадать либо быть необязательными ($arg=0)
     */
    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
        var_dump($name);
        var_dump($price);
        var_dump($numPages);
    }

    /** Метод интерфейса I3D */
    public function test()
    {
        // TODO: Implement test() method.
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages};<br>";
        $out .= "Старая цена товара: {$this->price};<br>";
//        можно посмотреть какое значение задали закрытому свойству discount:
        $out .= "Размер скидки: {$this->getDiscount()}%<br>";

        return $out;
    }
    public function getNumPages()
    {
        return $this->numPages;
    }

}