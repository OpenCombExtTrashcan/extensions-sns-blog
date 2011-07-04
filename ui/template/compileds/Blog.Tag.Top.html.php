<?php
				$__foreach_Arr_var0 = eval("if(!isset(\$__uivar_list)){ \$__uivar_list=&\$aVariables->getRef('list') ;};
return \$__uivar_list->iterator();");
				if(!empty($__foreach_Arr_var0)){ 
					$__foreach_idx_var3 = -1;
					foreach($__foreach_Arr_var0 as $__foreach_key_var2 => &$__foreach_item_var1){
						$__foreach_idx_var3++;
						 $aVariables->set("row",$__foreach_item_var1 ); ?>
			<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row[\"title\"];") ;?>:排名<?php echo eval("if(!isset(\$__uivar_row)){ \$__uivar_row=&\$aVariables->getRef('row') ;};
return \$__uivar_row[\"sum\"];") ;?><br />
<?php 
					}
				}
			 		?>