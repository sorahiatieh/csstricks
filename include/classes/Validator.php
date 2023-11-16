<?php
    class Validator
    {
        static function isNumber($input)
        {
          $pattern='/^[\d]+$/';
          if (preg_match($pattern,$input))
              return true;
          
          return false;
        }
        
        static function is_az09($input)
        {
            $pattern='/^([a-z0-9_]+)$/';
            
            if (preg_match($pattern,$input))
                return true;
            
            return false;
        }
        
    }
?>