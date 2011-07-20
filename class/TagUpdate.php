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
class TagUpdate extends Controller
{
	protected function init()
	{
		//创建视图
		$this->createView("TagUpdate", "Blog.Tag.Update.html",true) ;
		
		// 为视图创建控件
		$this->viewTagUpdate->addWidget( new Text("title","标签","",Text::single), 'title' )->addVerifier( NotEmpty::singleton (), "请说点什么" ) ;
		
		//设置model
		$this->viewTagUpdate->setModel( Model::fromFragment('blog_tag') ) ;
		
		
	}
	
	public function process()
	{
		
		$this->viewTagUpdate->model()->load($this->aParams->get("id"),"tid");
		$this->viewTagUpdate->exchangeData(DataExchanger::MODEL_TO_WIDGET) ;
		
		if( $this->viewTagUpdate->isSubmit( $this->aParams ) )		 
		{
            // 加载 视图窗体的数据
            $this->viewTagUpdate->loadWidgets( $this->aParams ) ;
            
            // 校验 视图窗体的数据
            if( $this->viewTagUpdate->verifyWidgets() )
            {
            	$this->viewTagUpdate->exchangeData(DataExchanger::WIDGET_TO_MODEL) ;
            	
            	
            	//$this->viewTagUpdate->model()->setData('uid',IdManager::fromSession()->currentId()->userId()) ;
            		
            	try {
            		$this->viewTagUpdate->model()->save() ;
            		$this->viewTagUpdate->createMessage( Message::success, "修改成功！" ) ;
            		
            		$this->viewTagUpdate->hideForm() ;
            			
            	} catch (ExecuteException $e) {
            			throw $e ;
            	}
           	}
		}
	}
}

?>