<?php
    class Menu extends DB
    {
        protected $table_name="tbl_menus";
		protected $limit=array(
			"Start"=>0,
			"Count"=>0
		);
		
        function getListOfSiteMenus()
		{
			
			$q="
			SELECT 
				 `parent_id`,
				 m.`title`,
				 `link_type`,
				 `target`,
				 `new_window`,
				 `link_title`,
				 `custom_url`
			 FROM `tbl_menus` m
			
			left join tbl_pages p
			on m.`target`=p.name
			
			WHERE m.`enable`=1
			ORDER BY `sort` ASC,m.`title` ASC
			";
			
			$this->setSQL($q)->setCommandType(DB::TYPE_LIST);
			
			return $this;
		}
    }
?>