<?php
error_reporting(-1);
require_once 'Write.php';

//    при создании нового экземпляра класса - аргументом указываем путь к файлу и название файла
$file = new Write(__DIR__ . '/file.txt');

$file->writeFileInfo('Добавили строку 1');  // запить прошла успешно Tue, 14 Jun 22 16:27:38 +0300
$file->writeFileInfo('Добавили строку 4');
$file->writeFileInfo('Добавили строку 3');
$file->writeFileInfo('Добавили строку 2');
$file->writeFileInfo('Добавили строку 6');
















