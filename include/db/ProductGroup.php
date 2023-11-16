<?php
    class ProductGroup extends DB
    {
       protected $table_name="tbl_product_groups";
       
       //محصولات یک گروه رو برمیگردونه
       function getListOfGroupProducts($group_id)
	   {
	   	$returnFields=$this->makeReturnFields();
	   	$limit=$this->makeLimit();
	   	$orderby=$this->makeOrderby();
	   	
	   	$q="
	   		SELECT $returnFields FROM `tbl_product_group_bridge`
	   		
	   		inner join tbl_products
	   		on `tbl_product_group_bridge`.`product_id`=`tbl_products`.`id`
	   		
	   		where `group_id`=$group_id and `tbl_products`.`enable`=1
	   		
	   		$orderby
	   		$limit
	   	";
	   	
	   	$this->setCommandType(DB::TYPE_LIST)->setSQL($q);
	   	
	   	return $this;
	   }
    }
?>