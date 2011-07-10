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
class TagContent extends Controller
{
	protected function init()
	{
		// 网页框架
		$this->add(new FrontFrame()) ;
		
		//创建视图
		$this->createView("defaultView", "Blog.Tag.Content.html",true) ;
		
		
		//设置model
		$this->model = Model::fromFragment('blog_link',array("blog"),true);
		$this->defaultView->setModel($this->model) ;
		
	}
	
	public function process()
	{
		
		$this->defaultView->model()->load($this->aParams->get("tid"),"tid");
//		print_r(DB::singleton()->executeLog()) ;
//		foreach ($this->model->childIterator() as $row){
//					
//			echo $row['blog.title'] ;
//		}
	}
}

?>