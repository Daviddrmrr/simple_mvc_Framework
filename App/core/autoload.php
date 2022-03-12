<?php


define('DS', DIRECTORY_SEPARATOR);

//APPLICATHON CONSTANS

define('APP_PATH', dirname(realpath(__FILE__)).DS.'..');

//REGISTRING AUTOALD FUNCTION

class Autoload
{
    public function autoload ($className)
    {
        $class = str_replace('\\','/', $className);
        $classFile = APP_PATH . DIRECTORY_SEPARATOR .strtolower($class). '.php';
        if (file_exists($classFile)) {
            echo $classFile;
            echo APP_PATH;
            require $classFile;

        }
    }
}
spl_autoload_register(__NAMESPACE__.'\Autoload::autoload');
