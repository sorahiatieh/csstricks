<?php
    class Base
    {
        private static $siteTitle="";
        private static $siteKeywords="";
        private static $siteDescription="";
        
        private static $pagename="404";
        private static $isCustomPage=false;
        private static $hasView=false;

        public static $data=array();

        /**
         * @return array
         */
        public static function getData($page_name)
        {
            return self::$data[$page_name];
        }

        /**
         * @param array $data
         */
        public static function setData($page_name,$data)
        {
            self::$data[$page_name]= $data;
        }
        
        /**
         * @return bool
         */
        public static function getHasView()
        {
            return self::$hasView;
        }

        /**
         * @param bool $hasView
         */
        public static function setHasView($hasView)
        {
            self::$hasView = $hasView;
        }
        

        /**
         * @return bool
         */
        public static function getIsCustomPage()
        {
            return self::$isCustomPage;
        }

        /**
         * @param bool $isCustomPage
         */
        public static function setIsCustomPage($isCustomPage)
        {
            self::$isCustomPage = $isCustomPage;
        }
        
        /**
         * @return string
         */
        public static function getPagename()
        {
            return self::$pagename;
        }

        /**
         * @param string $pagename
         */
        public static function setPagename($pagename)
        {
            self::$pagename = $pagename;
        }

        

        /**
         * @return string
         */
        public static function getSiteTitle()
        {
            return self::$siteTitle;
        }

        /**
         * @param string $siteTitle
         */
        public static function setSiteTitle($siteTitle)
        {
            self::$siteTitle = $siteTitle;
        }

        /**
         * @return string
         */
        public static function getSiteKeywords()
        {
            return self::$siteKeywords;
        }

        /**
         * @param string $siteKeywords
         */
        public static function setSiteKeywords($siteKeywords)
        {
            self::$siteKeywords = $siteKeywords;
        }

        /**
         * @return string
         */
        public static function getSiteDescription()
        {
            return self::$siteDescription;
        }

        /**
         * @param string $siteDescription
         */
        public static function setSiteDescription($siteDescription)
        {
            self::$siteDescription = $siteDescription;
        }

        /**
         * @return mixed
         */
        public static function getPageDetails()
        {
            return self::$data['_page_details'];
        }

        /**
         * @param $name
         * @param $value
         */
        public static function setPageDetails($name,$value)
        {
            self::$data['_page_details'][$name]=$value;
        }
    }
?>