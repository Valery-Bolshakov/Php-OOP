<?php

class Write
{
    public $file;  // путь к файлу
    public $fp;  // указатель на открытый файл


//    при создании нового экземпляра класса - аргументом указываем путь к файлу и название файла
    public function __construct($file)
    {
//         записываем путь к файлу в свойство $fale передавая его аргументом в конструкторе
        $this->file = $file;

//        проверяем доступность файла
        if (is_writable($this->file)) {
            echo "файл {$this->file} существует и доступен для записи <br>";
        } else {
            echo "Файл {$this->file} недоступен для записи";
            exit;
        }

        /*если файл существует и доступен - записываем его в свойство $fp

        Открывает файл для чтения и записи; помещает указатель в конец файла.
        Если файл не существует - пытается его создать. */
        $this->fp = fopen($this->file, 'a+');


    }

    public function __destruct()
    {
        /*закрываем соединение с файлом*/
        fclose($this->fp);

    }

    /** PHP_EOL - добавляем перенос строк при записи информации в файл */
    /*Добавляем информацию к файлу*/
    public function writeFileInfo($text)
    {
        /*fwrite(resource $stream, string $data, ?int $length = null): int|false*/
        /*функцию fwrite надо использовать совместно с функцией fopen, что бы файл был доступен*/
        /*конструкция запишет информацию в файл, или выкинет сообщение об ошибке*/
//        Добавили строку 1 Tuesday 14th of June 2022
        if (fwrite($this->fp, $text . ', ' . date('l jS \of F Y') . PHP_EOL) == true) {
//        if (fwrite($this->fp, $text . ', ' . date(DATE_RFC822) . PHP_EOL) == true) {
            echo 'запить прошла успешно ' . date(DATE_RFC822) . ' <br>';
        } else {
            echo "ошибка записи в файл {$this->file} <br>";
        }
    }

}