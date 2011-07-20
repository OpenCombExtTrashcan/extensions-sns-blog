<?php
namespace oc\ext\blog ;

use jc\db\DB;

use jc\mvc\model\db\orm\operators\Inserter;
use jc\mvc\model\db\orm\operators\Updater;
use jc\mvc\model\db\orm\PrototypeAssociationMap;
use oc\mvc\model\db\Model;

class ModelBlog extends Model
{
	public function __construct($bAggregarion=false)
	{
		parent::__construct(
			PrototypeAssociationMap::singleton()->fragment('blog',array("tag"))
			, $bAggregarion
		) ;
	}

	public function insert()
	{
		if(parent::insert())
		{
			$this->updateTagHot(true) ;	

			return true ;
		}
		
		else 
		{
			return false ;
		}
	}

	public function update()
	{
		$this->updateTagHot(false) ;	
		
		if(parent::update())
		{
			$this->updateTagHot(true) ;	

			return true ;
		}
		
		else 
		{
			return false ;
		}
	}
	
	public function delete()
	{
		if(parent::delete())
		{
			$this->updateTagHot(false) ;	

			return true ;
		}
		
		else 
		{
			return false ;
		}
	}
	
	public function updateTagHot($bIncrease=true)
	{
		if($bIncrease)
		{
		    Db::singleton()->query("update blog_blog_tag as t1,blog_blog_link as t2 set t1.hot=t1.hot+1 where t1.tid = t2.tid and t2.bid=".$this->data('bid'));
		}else{
		    Db::singleton()->query("update blog_blog_tag as t1,blog_blog_link as t2 set t1.hot=t1.hot-1 where t1.tid = t2.tid and t2.bid=".$this->data('bid'));
		}
		// $this->data('bid') ;
	}
}

?>