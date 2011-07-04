<?php
namespace oc\ext\blog ;


use jc\db\DB;

use oc\base\FrontFrame;

use jc\session\Session;
use jc\auth\IdManager;
use jc\auth\Id;
use jc\db\ExecuteException;
use oc\mvc\controller\Controller ;
use oc\mvc\model\db\Model;
use jc\mvc\model\db\orm\ModelAssociationMap;
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
class TagHot extends Controller
{
	protected function init()
	{
		// 网页框架
		$this->add(new FrontFrame()) ;
		
		//创建视图
		$this->createView("defaultView", "Blog.Tag.Hot.html",true) ;
		
		
		//设置model
		$this->model = Model::fromFragment('blog_tag',array(),true);
		$this->defaultView->setModel($this->model) ;
		
	}
	
	public function process()
	{
		
		$this->defaultView->model()->load();
//		foreach ($this->model->childIterator() as $row){
//					
//			echo $row['blog.title'] ;
//		}
	}
}

?>