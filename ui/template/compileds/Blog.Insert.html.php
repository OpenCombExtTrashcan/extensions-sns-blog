<?php \jc\resrc\HtmlResourcePool::singleton()->addRequire("blog.css",\jc\resrc\HtmlResourcePool::RESRC_CSS) ; ?>

<div class="blogInsert">
<h4>发博文</h4>

<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView;") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>



<?php if( !($aVariables->get('theView') instanceof \jc\mvc\view\IFormView) or $aVariables->get('theView')->isShowForm() ) { ?>
<form action="/?c=blog.insert" method="post">
	<div class="blogTit">
		<label>标题：</label>
		<?php $_aWidget = $aVariables->get('theView')->widget("title") ;
if($_aWidget){
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."title".')' ;
} ?>

		<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('title');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<div class="blogContent_border">
		<?php $_aWidget = $aVariables->get('theView')->widget("text") ;
if($_aWidget){
	$_aWidget->setAttribute("class","blogContent") ;
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."text".')' ;
} ?>

		<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('text');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<div class="blogTag">
		<label>标签：</label>
		<?php $_aWidget = $aVariables->get('theView')->widget("tag") ;
if($_aWidget){
	$_aWidget->display($this,null,$aDevice) ;
}else{
	echo '缺少 widget (id:'."tag".')' ;
} ?>

		<?php 
$__ui_msgqueue = eval("if(!isset(\$__uivar_theView)){ \$__uivar_theView=&\$aVariables->getRef('theView') ;};
return \$__uivar_theView->widget('tag');") ;
if( $__ui_msgqueue instanceof \jc\message\IMessageQueueHolder )
{ $__ui_msgqueue = $__ui_msgqueue->messageQueue() ; }
\jc\lang\Assert::type( '\\jc\\message\\IMessageQueue',$__ui_msgqueue);
if( $__ui_msgqueue->count() ){ 
	$__ui_msgqueue->display($this,$aDevice) ;
} ?>

	</div>
	<input type="submit" value="发布博文" class="blogUpdate_btn" />
	
<?php if($aVariables->get('theView') instanceof \jc\mvc\view\IFormView){ ?><input type="hidden" name="<?php echo $aVariables->get('theView')->htmlFormSignature()?>" value="1" /><?php } ?></form><?php } ?>

</div>