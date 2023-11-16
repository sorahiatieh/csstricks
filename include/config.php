<?php
    defined('_AA') or die('Access Denied!');
    
    date_default_timezone_set('Asia/Tehran');
   
    $mysqli=new mysqli('localhost','root','','shop');

    if($mysqli->connect_errno)
        die('Error in connect to DB!');

    //$mysqli->query($mysqli,"set @@global.sql_mode='ERROR_FOR_DIVISION_BY_ZERO,NO_ZERO_DATE,NO_ZERO_IN_DATE,NO_AUTO_CREATE_USER");
    $mysqli->set_charset('utf8');

    DB::setConnection($mysqli);
    
    mb_internal_encoding('UTF-8');
?>