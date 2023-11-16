<?php
    defined('_AA') or die('Access Denied!');
    spl_autoload_register('st_autoloader');

    function st_autoloader($class)
    {
        $directories=array(
            "classes",
            "db",
            "exception"
        );
        foreach ($directories as $item)
        {
            if (file_exists(dirname(__FILE__).'/'.$item.'/'.$class.'.php'))
            {
                require_once dirname(__FILE__).'/'.$item.'/'.$class.'.php';
                return;
            }
        }
    }
?>