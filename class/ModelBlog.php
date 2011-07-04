<?php
namespace oc\ext\blog ;

use jc\mvc\model\db\orm\operators\Inserter;
use jc\mvc\model\db\orm\operators\Updater;
use jc\mvc\model\db\orm\ModelAssociationMap;
use oc\mvc\model\db\Model;

class ModelBlog extends Model
{
	public function __construct($bAggregarion=false)
	{
		parent::__construct(
			ModelAssociationMap::singleton()->fragment('blog',array("blog:tag"))
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
		    
		}else{
			
		}
		// $this->data('bid') ;
	}
}

?>