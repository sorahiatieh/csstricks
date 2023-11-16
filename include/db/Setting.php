<?php
    class Setting extends DB
    {
        protected $table_name="tbl_settings";
        /**
         * @return string
         */
        function getSetting($name)
        {
            $Details=$this->setWhere(array(
                "name"=>$name
            ))->setReturnFields(array(
                "value"
            ))->getDetails()->run();
            
            if (empty($Details))
                return '';
            
            return $Details['value']; // ولیو که ریترن میشه همون ستون ولیو در جدول ستینگه
        }
    }
?>