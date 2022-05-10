<?php

class Write
{
    public $filename;  // путь к файлу
    public $fp;  // указатель на открытый файл


    public function __construct($filename)
    {
        /* путь к файлу аргументом в конструкторе*/
        $this->filename = $filename;

        /*Открывает файл для чтения и записи; помещает указатель в конец файла.
        Если файл не существует - пытается его создать. */
        $this->fp = fopen($filename, 'a+');

        /*проверяем доступность файла*/
        if (is_writable($filename)) {
            echo 'файл существует и доступен для записи <br>';
        } else {
            echo "Файл недоступен для записи";
            exit;
        }


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
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
            echo 'запить не происходит';
            exit;
        }
    }

}