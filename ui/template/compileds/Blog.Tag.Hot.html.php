<?php \jc\resrc\HtmlResourcePool::singleton()->addRequire("blog.css",\jc\resrc\HtmlResourcePool::RESRC_CSS) ; ?>

<table cellspacing="0" cellpadding="0" class="blogtagHot">
	<tbody>
		<tr class="blogtagHot_tit">
			<th>标签</th>
			<th style="width:50%">排名</th>
		</tr>
		<?php
				$__foreach_Arr_var0 = eval("if(!isset(\$__uivar_theModel)){ \$__uivar_theModel=&\$aVariables->getRef('theModel') ;};
return \$__uivar_theModel->childIterator();");
				if(!empty($__foreach_Arr_var0)){ 
					$__foreach_idx_var3 = -1;
					foreach($__foreach_Arr_var0 as $__foreach_key_var2 => &$__foreach_item_var1){
						$__foreach_idx_var3++;
						 $aVariables->set("row",$__foreach_item_var1 ); ?>
		<tr>
			<td><?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('title');") ;?></td>
			<td class="hotNumber"><?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row->data('hot');") ;?></td>
		</tr>
		<?php 
					}
				}
			 		?>
	</tbody>
</table>
