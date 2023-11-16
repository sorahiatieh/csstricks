<?php
    class Head
    {
        /**
         * @var array 
         */
        private static $scripts=array();

        /**
         * @var array 
         */
        private static $stylesheets=array();

        /**
         * @param $path
         */
        static function addScript($path)
        {
            if (!in_array($path,self::$scripts))
                self::$scripts[]=$path;
        }

        /**
         * @param $path
         */
        static function addStylesheet($path,$media='all')
        {
            $media=strtolower($media);

            foreach (self::$stylesheets as $item)
            {
                if ($item['Path']==$path)
                    return;
            }
            
            // Add to array
            self::$stylesheets[]=array(
                "Path"=>$path,
                "Media"=>$media
            );
        }

        /**
         * make html head
         */
        static function makeHead()
        {
            self::makeHeadStylesheets();
            echo "\n\t";
            self::makeHeadScripts();
        }

        /**
         * add scripts in html head
         */
        static function makeHeadScripts()
        {
            foreach (self::$scripts as $item)
            {
                echo "<script src='$item'></script>\r\n\t";
            }
        }

        /**
         * add stylesheet in html head
         */
        static function makeHeadStylesheets()
        {
            foreach (self::$stylesheets as $item)
            {
                $media="";
                
                $time=filemtime($item['Path']);
                
                if ($item['Media']!='all')
                    $media=' media="'.$item['Media'].'"';
                
                echo "<link rel='stylesheet' href='".$item['Path'].'?'.$time."'".$media.">\r\n\t";
            }
        }
    }
?>