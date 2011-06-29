<?php
namespace oc\ext\blog ;


use oc\base\FrontFrame;

use jc\session\Session;
use jc\auth\IdManager;
use jc\auth\Id;
use jc\db\ExecuteException;
use jc\mvc\controller\Controller ;
use jc\mvc\model\db\Model;
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
class Insert extends Controller
{
	protected function init()
	{
		// 网页框架
		$this->add(new FrontFrame()) ;
		
		//创建视图
		$this->createView("defaultView", "Blog.Insert.html",true) ;
		
		// 为视图创建控件
		$this->defaultView->addWidget( new Text("title","标题","",Text::single), 'title' )->addVerifier( NotEmpty::singleton (), "请说点什么" ) ;
		$this->defaultView->addWidget( new Text("text","内容","",Text::multiple), 'text' )->addVerifier( NotEmpty::singleton (), "请说点什么" ) ;
//		$this->defaultView->addWidget( new Text("path","图片","",Text::single), 'image.path' )->addVerifier( NotEmpty::singleton (), "请说点什么" ) ;
		
		//设置model
		$this->defaultView->setModel( Model::fromFragment('blog') ) ;
		
	}
	
	public function process()
	{
		
		if( $this->defaultView->isSubmit( $this->aParams ) )		 
		{
            // 加载 视图窗体的数据
            $this->defaultView->loadWidgets( $this->aParams ) ;
            
            // 校验 视图窗体的数据
            if( $this->defaultView->verifyWidgets() )
            {
            	$this->defaultView->exchangeData(DataExchanger::WIDGET_TO_MODEL) ;
            	
            	
				$this->defaultView->model()->setData('uid',IdManager::fromSession()->currentId()->userId()) ;
				$this->defaultView->model()->setData('time',time()) ;
//            	$child = $this->defaultView->model()->child('image')->createChild();
//            	$child->setData('pid',2);
//            	$child->setData('path',2);
            	
            	try {
            		$this->defaultView->model()->save() ;
            		$this->defaultView->createMessage( Message::success, "发布成功！" ) ;
            		
            		$this->defaultView->hideForm() ;
            			
            	} catch (ExecuteException $e) {
            			throw $e ;
            	}
           	}
		}
	}
}

?>