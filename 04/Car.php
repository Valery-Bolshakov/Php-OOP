<?php

class Car
{

    public $color;
    public $wheels;
    public $speed;
    public $brand;

    /**
     * Специальный метод __construct (если он написан в классе) - вызывается сразу при создании
     * нового экземпляра класса
     */
    /*Классическое использование данного метода*/
    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        echo 'метод ' . __METHOD__ . ' - Вызывается ВСЕГДА при создании экземпляра класса <br>';
    }

    public function getCarInfo()
    {
        return "<h3>О моем авто:</h3>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>
            Марка: {$this->brand}<br>";
    }

    /**
     * Если название метода СОВПАДАЕТ с названием класса - данный метод будет считаться конструктором,
     * при отсутствии самого конструктора (Так делать не рекомендуется).
     */
    /*public function Car($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }*/

    /** Пример разрыва тела класса */
    public function getLorem()
    {
        /*php заканчивается*/ ?>
        <br>
        <div>Начинается Html код</div>
        <div>Hello, world!</div><br>
        <?php /* Продолжаем php*/
    }

    /* Метод срабатывает при удалении объекта
       после отработки метода объект удаляется и соединение с БД прекращается */
    public function __destruct()
    {
        /* Распечатываем псевдопеременную '$this' Которая указывает на текущий объект */
        var_dump($this);
    }

}

