<?php
    class NotFound extends Exception
    {
        private static $contentMessage="صفحه موردنظر در سیستم ثبت نشده است";
        
        function __construct($matn="")
        {
            if ($matn!='')
                self::$contentMessage=$matn;
        }
        
        static function getContentMessage()
        {
            return self::$contentMessage;
        }
    }
?>