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
use jc\verifier\NotNull;
use jc\mvc\view\widget\Text;
use jc\mvc\view\widget\Select;
use jc\mvc\view\widget\CheckBtn;
use jc\mvc\view\widget\RadioGroup;
use jc\message\Message ;
use jc\mvc\view\DataExchanger ;


/**
 * 
 * Enter description here ...
 * @author gaojun
 *
 */
class FriendBlog extends Controller
{
	protected function init()
	{
		$this->createView("defaultView", "Blog.FriendBlog.html") ;
	}
	
	public function process()
	{
		$oRs = Db::singleton()->query("SELECT t3.* FROM coreuser_subscribe as t1 INNER JOIN coreuser_subscribe as t2 on t1.uid=t2.subscribeid INNER JOIN blog_blog as t3 ON t1.uid=t3.uid where t2.uid = ".IdManager::fromSession()->currentId()->userId());
		$this->defaultView->variables()->set("list",$oRs);
	}
}

?>