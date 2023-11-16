<?php
    defined('_AA') or die('Access Denied!');
    
    /**
     * This is a functionn for convert arabic to farsi
     *
     * @param $inpu
     */
    function secure($input)
    {
        global $mysqli;
    
        $input=str_ireplace('ي','ی',$input);
        $input=str_ireplace('ك','ک',$input);
    
        if(get_magic_quotes_gpc())
        {
            $text=stripslashes($input);
        }
    
        $input=$mysqli->real_escape_string($input);
    
        return $input;
    }
    
    /**
     * @return mixed
     */
    function getIp()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    /**
     * @return mixed
     */
    function getRealIp()
    {
        return getIp();
    }

    /**
     * @param $text
     * @param string $extention
     * @return string
     */
    function text2url($text,$extention='.html')
    {
        $text=preg_replace('/\s+/','-',$text);
        
        return '-'.$text.$extention;
    }
?>