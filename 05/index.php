<?php
error_reporting(-1);
require_once 'Write.php';

$file = new Write(__DIR__ . '/file.txt'); // указываем путь на текущую дирректорию и название файла

$file->writeFileInfo('Добавили строку 1');
$file->writeFileInfo('Добавили строку 4');
$file->writeFileInfo('Добавили строку 34');
$file->writeFileInfo('Добавили строку 2');
$file->writeFileInfo('Добавили строку 6');
















