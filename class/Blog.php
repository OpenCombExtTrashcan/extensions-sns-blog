<?php
namespace oc\ext\blog ;

use jc\auth\IdManager;

use jc\mvc\model\db\orm\ModelAssociationMap;

use jc\db\DB ;
use jc\db\PDODriver ;

use oc\ext\Extension;

class Blog extends Extension
{
	public function load()
	{
	
		//是否登陆
		if(!IdManager::fromSession()->currentId())
		{
		    echo "请先登陆";
		}
		
		
    	// 取得模型关系图的单件实例
        $aAssocMap = ModelAssociationMap::singleton() ;
    	$aAssocMap->addOrm(
                	array(
                		'keys' => 'bid' ,
                		'table' => 'blog' ,
                	
						'hasMany' => array(
							array(
								'prop' => 'image' ,
								'fromk' => 'bid' ,
								'tok' => 'pid' ,
								'model' => 'images'
							),
							array(
								'prop' => 'music' ,
								'fromk' => 'bid' ,
								'tok' => 'pid' ,
								'model' => 'musics'
							),
							array(
								'prop' => 'video' ,
								'fromk' => 'bid' ,
								'tok' => 'pid' ,
								'model' => 'videos'
							),
						) ,
                	)
        ) ;
          
        $aAssocMap->addOrm(
            	array(
            		'keys' => 'id' ,
            		'table' => 'images' ,
            		'belongsTo' => array(
            			array(
            				'prop' => 'blog' ,
            				'fromk' => 'pid' ,
            				'tok' => 'bid' ,
            				'model' => 'blog'
            			),
            		),
            	)
        );  
          
        $aAssocMap->addOrm(
            	array(
            		'keys' => 'id' ,
            		'table' => 'musics' ,
            		'belongsTo' => array(
            			array(
            				'prop' => 'blog' ,
            				'fromk' => 'pid' ,
            				'tok' => 'bid' ,
            				'model' => 'blog'
            			),
            		),
            	)
        );  
          
        $aAssocMap->addOrm(
            	array(
            		'keys' => 'id' ,
            		'table' => 'videos' ,
            		'belongsTo' => array(
            			array(
            				'prop' => 'blog' ,
            				'fromk' => 'pid' ,
            				'tok' => 'bid' ,
            				'model' => 'blog'
            			),
            		),
            	)
        );  
		
		///////////////////////////////////////
		// 向系统添加控制器
		$this->application()->accessRouter()->addController('blog', "oc\\ext\\blog\\Index") ;
		$this->application()->accessRouter()->addController('blog.insert', "oc\\ext\\blog\\Insert") ;
		$this->application()->accessRouter()->addController('blog.update', "oc\\ext\\blog\\Update") ;
		$this->application()->accessRouter()->addController('blog.delete', "oc\\ext\\blog\\Delete") ;
	}
	
}

?>