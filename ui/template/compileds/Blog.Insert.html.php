
<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView;") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>



<?php if( !($aVariables->get('theView') instanceof \jc\mvc\view\FormView) or $aVariables->get('theView')->isShowForm() ) { ?>
<form action="/?c=blog.insert" method="post">
	<div>
		<?php $_aWidget = $aVariables->get('theView')->widget("title") ;
if($_aWidget){
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."title".')' ;
} ?>

		标题：<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('title');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<div>
		<?php $_aWidget = $aVariables->get('theView')->widget("text") ;
if($_aWidget){
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."text".')' ;
} ?>

		内容：<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('text');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<div>
		<?php $_aWidget = $aVariables->get('theView')->widget("tag") ;
if($_aWidget){
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."tag".')' ;
} ?>

		标签：<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('tag');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<input type="submit" value="submit" />
	
<input type="hidden" name="<?php echo $aVariables->get('theView')->htmlFormSignature()?>" value="1" /></form><?php } ?>
