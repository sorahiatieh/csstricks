<?php
    class Blog extends DB
    {
        protected $table_name="tbl_blogs";
        
        // استفاده از کانستراکت درست تره ولی یه جاهایی محدودیت استفاده ازش رو داریم
        /*function __construct()
        {
            $this->table_name="tbl_blogs";
        }*/
        
        function getURL($id)
        {
            $Details=$this->setWhere(array(
                "id"=>$id
            ))->setReturnFields(array(
                "title"
            ))->getDetails();
            
            if (empty($Details))
                return 'blog/'.$id;
            
            return 'blog/'.$id.text2url($Details['title']);
        }
        
        function getURLWithTitle($id,$title)
        {
            return 'blog/'.$id.text2url($title);
        }
        
        function search($input)
		{
			$limit=$this->makeLimit();
			$orderby=$this->makeOrderby();
			$returnFields=$this->makeReturnFields();
			
			$q="
				select $returnFields from
				 (
					 select `id`,`title`,`title` as 'link_title',`text`,`enable`,'blogs' as 'Type' from tbl_blogs
					 
					 UNION 
					 select `id`,`title`,`title` as 'link_title',`text`,`enable`,'portfolio' from tbl_portfolioes
					 
					 UNION 
					 select `id`,`title`,`link_title`,`text`,`enable`,'services' from tbl_services
					 
				 ) my_search
					where (`title` LIKE '%$input%' or fnStripTags(`text`) LIKE '%$input%') AND `enable`=1
					
					$orderby
					
					$limit
				";
			
			$this->setSQL($q)->setCommandType(DB::TYPE_LIST);
			return $this;
			
		}

		function getSearchCount($input)
		{
			$q="
				select count(1) as 'Tedad' from
				 (
					 select `id`,`title`,`title` as 'link_title',`text`,`enable`,'blogs' as 'Type' from tbl_blogs
					 
					 UNION 
					 select `id`,`title`,`title` as 'link_title',`text`,`enable`,'portfolio' from tbl_portfolioes
					 
					 UNION 
					 select `id`,`title`,`link_title`,`text`,`enable`,'services' from tbl_services
					 
				 ) my_search
					where (`title` LIKE '%$input%' or fnStripTags(`text`) LIKE '%$input%') AND `enable`=1
				";

			$this->setSQL($q)->setCommandType(DB::TYPE_SELECT_FUNC);
			return $this;

		}
    }
?>