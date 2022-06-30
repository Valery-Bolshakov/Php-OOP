<?php

class Car
{
    /**
     * Публичные свойства/методы описаны в классе но принадлежат объекту класса
     * public $color; public function
     *
     * Статичные свойства/методы принадлежат классу (можно использовать только в классе)
     * public static $color, public static function
     */
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    /** Константы: (так же принадлежат классу а не объекту)
     * они нужны для хранения неизменяемой информации - например настройки подключения к БД
     * self::TEST_CAR - обращение к константе
     */
    /*создадим 2 константы. синтаксис следующий:
    По умолчанию константы являютяс публичными. Но с версии 7.1 можно ограничить
    их область видимости (public, static or protected)*/
    const TEST_CAR = 'Прототип';
    const TEST_CAR_SPEED = 300;

    /*создадим статическое свойство для подсчета автомобилей*/
    public static $countCar = 0;  // self::$countCar++ или Car::$countCar++

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

        /** Обращение к статичным свойствам - посредством ключевого слова 'self::...' или 'Car::...' */
        self::$countCar++;  // вводим увеличение счетчика авто при создании объектов
    }

    /*создаем статичный метод который будет считать авто
    Теперь при каждом новом создании объекта класса - $countCar будет увеличиваться */
    /** echo Car::getCount(); - Обращение к статическому методу */
    public static function getCount()
    {
        return self::$countCar;
    }

    /** Нестатические методы можно вызывать Статически - но не рекомендуют */
    public function Test()
    {
        echo 'Hello, World!';
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br><hr>";
    }


    /** Константы:
     * self::TEST_CAR - обращение к константе
     */
    /* константы нужны для хранения неизменяемой информации, например настройки соединения с БД */
    public function getPrototypeInfo()
    {
        return "<h3>Работа с константами:</h3>
            <h4>Данные тестового авто:</h4>
            Наименование: " . self::TEST_CAR . "<br>
            Скорость: " . self::TEST_CAR_SPEED . "<br><hr>";
    }

}