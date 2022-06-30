<?php

class Product // создали класс для различного вида продукции
{

    /* Опишем общие свойства которые могут быть у всей продукции */
    public $name;
    public $price;

    /* специфичные свойства которые могут быть не у всех. перекинули свойства в соотв классы */
    /*public $cpu;
    public $numPages;*/

    /* опишем конструктор со всеми общими свойствами товаров.*/
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        /*$this->cpu = $cpu;
        $this->numPages = $numPages;*/ // перекинули свойства в соотв классы
    }


    /* Пишем метод для получения информации о товаре:
       По умолчанию будет выводить значения свойств для 'notebook' */
    public function getProduct()
    {
        /* просто возвращаем неименованую строку, которую в дальнейшем дополним
        к переменной $out в дочерних классах */
        return "<hr><b>О товаре:</b><br>
                Наименование: {$this->name};<br>
                Цена: {$this->price};<br>";

        /* добавим условие для вывода нужного свойства согласно переданному аргументу */
        /*if ($type == 'notebook') {
            $out .= "Процессор: {$this->cpu}<br>";
        } else {
            $out .= "Кол-во страниц: {$this->numPages}<br>";
        }*/

    }

    /**
     * Данные методы называют ГЕТТЕРЫ. IDE генерирует их автоматически. Наводим курсор на
     * свойство, жмем Alt+Enter и указываем 'add getter'
     */
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    /* что бы отдельно получать какие то свойства - пишем для них отдельные методы */
    /*public function getCpu()
    {
        return $this->cpu;
    }*/

    /**
     * Данные методы называют ГЕТТЕРЫ. IDE генерирует их автоматически. Наводим курсор на
     * свойство, жмем Alt+Enter и указываем 'add getter'
     */
    /*public function getNumPages()
    {
        return $this->numPages;
    }*/

}