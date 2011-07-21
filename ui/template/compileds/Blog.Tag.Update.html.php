<?php \jc\resrc\HtmlResourcePool::singleton()->addRequire("blog.css",\jc\resrc\HtmlResourcePool::RESRC_CSS) ; ?>

<div class="blogtagUpdate">
<h4>修改标签</h4>

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
<form action="/?c=blog.tag.update" method="post">
	<div class="blogTag">
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
	
	<input type="hidden" id="id" name="id" value="<?php echo eval("if(!isset(\$__uivar_theModel)){ \$__uivar_theModel=&\$aVariables->getRef('theModel') ;};
return \$__uivar_theModel->data('tid');") ;?>"></input>
	<input type="submit" value="修改" class="blogUpdate_btn" />
	
<?php if($aVariables->get('theView') instanceof \jc\mvc\view\IFormView){ ?><input type="hidden" name="<?php echo $aVariables->get('theView')->htmlFormSignature()?>" value="1" /><?php } ?></form><?php } ?>

</div>