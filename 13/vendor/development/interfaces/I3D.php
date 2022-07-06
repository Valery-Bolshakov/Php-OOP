<?php

namespace development\interfaces;  // указали пространство имен для данного интерфейса

interface I3d
{
    /**
     * Создали Интерфейс. Именование интерфейсов принято начинать с большой или маленькой буквы 'i'
     * В интерфейсах можно создавать Свойства, Константы и т.д.
     *
     * Если константы созданные в родительском класса Можно переопределять в дочерних - то константы
     * созданные в Интерфейсах НЕЛЬЗЯ переопределять в дочерних классах
     *
     */
    const TEST2 = 'test interface';  // константы интерфейсах НЕЛЬЗЯ переопределить в дочерних классах

//    методы Интерфейсов НЕ должны иметь реализацию внутри интерфейса
    public function test();

}