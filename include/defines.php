<?php
    defined('_AA') or die('Access Denied!');
    
    define("PAGES_PATH",realpath(dirname(__FILE__).'/../pages/').'/');
    define("SECTIONS",realpath(dirname(__FILE__).'/../pages/sections/').'/');
    define("REQUIRE_PATH",realpath(dirname(__FILE__).'../pages/requires/').'/');
    
    define("SITE_URL",$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/Projects/company2/');
?>