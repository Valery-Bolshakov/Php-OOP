<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Курс по ООП PHP</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<ul><h3>Курс по ООП PHP</h3>
    <li><a href="01/index.php">Урок 1. Класс и объект </a></li>
    <li><a href="02/index.php">Урок 2. Свойства объекта</a></li>
    <li><a href="03/index.php">Урок 3. Методы объекта</a></li>
    <li><a href="04/index.php">Урок 4. Методы __construct и __destruct</a></li>
    <li><a href="05/index.php">Урок 5. Класс для работы с файлом. Домашнее задание.</a></li>
    <li><a href="06/index.php">Урок 6. Константы класса. Статические свойства и методы</a></li>
    <li><a href="07-08/index.php">Урок 7-8. Наследование. Часть 1-2</a></li>
    <li><a href="09/index.php">Урок 9. Модификаторы доступа</a></li>
    <li><a href="10/index.php">Урок 10. Абстрактные классы и Интерфейсы</a></li>
    <li><a href="11/index.php">Урок 11. Интерфейсы и контроль типа</a></li>
    <li><a href="12/index.php">Урок 12. Автозагрузка и пространства имен</a></li>
    <li><a href="13/index.php">Урок 13. Composer и автозагрузка</a></li>
<!--    <li><a href="14/index.php">Урок 14. Трейты</a></li>-->
<!--    <li><a href="15/index.php">Урок 15. Позднее статическое связывание</a></li>-->
<!--    <li><a href="16/index.php">Урок 16. Магические методы</a></li>-->
<!--    <li><a href="17/index.php">Урок 17. Шаблоны проектировани</a></li>-->
</ul>



<hr><b><h3>Функция для удобного (красивого) вывода содержимого массива:</h3>
<p>function debug($data){<br>
        &nbsp;&nbsp;&nbsp;&nbsp;echo '&lt;pre&gt;' . print_r($data, 1) . '&lt;/pre&gt;';<br> <!--<pre>...</pre>-->
    }</p>
debug($data);</b>
</body>
</html>
