<?php \jc\resrc\HtmlResourcePool::singleton()->addRequire("blog.css",\jc\resrc\HtmlResourcePool::RESRC_CSS) ; ?>

<div class="alltagList">
<h4>所有标签</h4>
<?php
				$__foreach_Arr_var0 = eval("if(!isset(\$__uivar_theModel)){ \$__uivar_theModel=&\$aVariables->getRef('theModel') ;};
return \$__uivar_theModel->childIterator();");
				if(!empty($__foreach_Arr_var0)){ 
					$__foreach_idx_var3 = -1;
					foreach($__foreach_Arr_var0 as $__foreach_key_var2 => &$__foreach_item_var1){
						$__foreach_idx_var3++;
						 $aVariables->set("row",$__foreach_item_var1 ); ?>
	<li>
			<span><a href="?c=blog.tag.content&tid=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('tid');") ;?>"><?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('title');") ;?> </a></span>
			<em><a href="?c=blog.tag.content&tid=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('tid');") ;?>">查看标签内容</a>  <a href="?c=blog.tag.update&id=<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('tid');") ;?>">修改</a></em>
	</li>		
<?php 
					}
				}
			 		?>
</div>