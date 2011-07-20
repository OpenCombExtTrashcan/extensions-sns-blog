<?php
namespace oc\ext\blog ;


use oc\base\FrontFrame;

use jc\session\Session;
use jc\auth\IdManager;
use jc\auth\Id;
use jc\db\ExecuteException;
use oc\mvc\controller\Controller ;
use oc\mvc\model\db\Model;
use jc\mvc\model\db\orm\PrototypeAssociationMap;
use jc\verifier\Email;
use jc\verifier\Length;
use jc\verifier\NotEmpty;
use jc\mvc\view\widget\Text;
use jc\mvc\view\widget\Select;
use jc\mvc\view\widget\CheckBtn;
use jc\mvc\view\widget\RadioGroup;
use jc\message\Message ;
use jc\mvc\view\DataExchanger ;


/**
 * Enter description here ...
 * @author gaojun
 *
 */
class TagList extends Controller
{
	protected function init()
	{
		//创建视图
		$this->createView("TagList", "Blog.Tag.List.html",true) ;
		
		
		//设置model
		$this->viewTagList->setModel( Model::fromFragment('blog_tag',array(),true) ) ;
		
		
	}
	
	public function process()
	{
		
		$this->viewTagList->model()->load();
		
	}
}

?>