<?php \jc\resrc\HtmlResourcePool::singleton()->addRequire("blog.css",\jc\resrc\HtmlResourcePool::RESRC_CSS) ; ?>

<div class="allblogList">
<h4>全部博文</h4>
<ul>
<?php
				$__foreach_Arr_var0 = eval("if(!isset(\$__uivar_theModel)){ \$__uivar_theModel=&\$aVariables->getRef('theModel') ;};
return \$__uivar_theModel->childIterator();");
				if(!empty($__foreach_Arr_var0)){ 
					$__foreach_idx_var3 = -1;
					foreach($__foreach_Arr_var0 as $__foreach_key_var2 => &$__foreach_item_var1){
						$__foreach_idx_var3++;
						 $aVariables->set("row",$__foreach_item_var1 ); ?>
	<li>
			<span><a href="?c=blog.update&id=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('bid');") ;?>"><?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('title');") ;?></a></span>
			<em> <a href="?c=blog.update&id=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('bid');") ;?>">编辑</a> <a href="?c=blog.delete&id=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('bid');") ;?>">删除</a></em>
	</li>		
<?php 
					}
				}
			 		?>
</ul>
</div>