<?php
namespace myShop;


class ErrorsHeandler
{
    public function __construct()
    {
        if(DEBUG){
            error_reporting(-1);
        }else{
            error_reporting(0);
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($exc){
        $this->logErrors($exc->getMessage(), $exc->getFile(), $exc->getLine());
        $this->dysplayError('Исключение', $exc->getMessage(), $exc->getFile(), $exc->getLine(), $exc->getCode());
    }

    protected function logErrors($message = '', $file = '', $line = '')
    {
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n--------------\n", 3, ROOT . '/temp/errors.log');
    }

    protected function dysplayError($errNum, $errStr, $errFile, $errLine, $responce = 404)
    {
        http_response_code($responce);
        if ($responce == 404 && !DEBUG){
            require WWW . '/errors/404.php';
            die;
        }
        if (DEBUG){
            require WWW . '/errors/dev.php';
        }else{
            require WWW . '/errors/prod.php';
        }
        die;
    }
}