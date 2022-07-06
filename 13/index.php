<?php
/** Урок 13. Composer и автозагрузка */

use development\interfaces\iGadget;
// в php7 появилась возможность группировать классы что находятся в одном пространстве имен посредством '{}':
use app\{BookProduct, NotebookProduct};

require_once __DIR__ . "/vendor/autoload.php";


error_reporting(-1);


/**
 * В качестве автозагрузчика для маилера будем использовать composer
 * создаем файл с настройками composer.json и пишем настройки в какой дирректории искать файлы
 * Далее заходим в консоль композера, переходим в дирректорию 13 и выполняем команду composer install
 * данная команда создаст автозагрузчик и настроит все зависимости (пакеты и библиотеки)
 * Далее надо подключить автозагрузчик из папки vendor: "require_once __DIR__ . "/vendor/autoload.php";"
 *
 * Теперь для примера отделим классы для разработки (ядро проекта) от пользовательских
 * классов (app) (как делают в реальных проектах):
 * Создаем в папке vendor новую дирректорию development и переносим в нее некоторые классы и интерфейсы
 * Меняем настройки файла composer что бы проект искал классы в соотв дирректории
 * Меняем пути и пространства имен в классах на новые с учетом их нового расположения
 * Далее в консоле композера надо пересоздать (обновить) зависимости командой composer dump-autoload
 *
 * Настройка сторонних библиотек на примере мейлера:
 * в консоле композера запускаем команду composer require phpmailer/phpmailer для настройки
 * в папке vendor установилась библиотека phpmailer с которой уже можно работать
 *
 */


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

$mail = new \PHPMailer\PHPMailer\PHPMailer();
debug($mail);






















