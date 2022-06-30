<?php


class BookProduct extends Product
{

    /** повторяем манипуляции с кодом как в классе NotebookProduct */
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;

        /** Передаем закрытое свойство discount с помощью сеттера и задаем ему любое значение */
        $this->setDiscount(5);

//        Внутри класса где объявленны будут видны свойства public and protected
//        var_dump($this->public);
//        var_dump($this->protected);
//        Своство  недоступно
//        var_dump($this->private);
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