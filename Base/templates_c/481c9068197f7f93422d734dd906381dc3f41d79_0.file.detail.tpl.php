<?php /* Smarty version 3.1.27, created on 2015-10-30 09:48:29
         compiled from "C:\wamp\www\templates\detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1801956333ced81dad1_14560313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481c9068197f7f93422d734dd906381dc3f41d79' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\detail.tpl',
      1 => 1446198441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801956333ced81dad1_14560313',
  'variables' => 
  array (
    'flag' => 0,
    'username' => 0,
    'qushi' => 0,
    'comment' => 0,
    'commentitem' => 0,
    'thingid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56333ced885aa1_68696815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56333ced885aa1_68696815')) {
function content_56333ced885aa1_68696815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1801956333ced81dad1_14560313';
?>
<html>
<head>
<?php echo '<script'; ?>
 type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"><?php echo '</script'; ?>
>
<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
<?php echo '<script'; ?>
 type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(function(){
		$("#logout").click(function(){
			if(confirm("真的要离开吗 ？")){
				window.location.href = "/Base/rooter.php?rooter=User/login";
			}		
		});
	})
	<?php if ($_smarty_tpl->tpl_vars['flag']->value != '') {?>
		alert("<?php echo $_smarty_tpl->tpl_vars['flag']->value['message'];?>
");
	<?php }?>
<?php echo '</script'; ?>
>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li>
						<a href="/Base/rooter.php?rooter=User/index">主页</a>
					</li>
					<li>
						<a href="/Base/rooter.php?rooter=User/showperson">个人</a>
					</li>
					<li>
						<a id="logout">登出</a>
					</li>
				</ul>
				<h5 class="text-muted">
					欢迎您:<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>
				</h5>
			</div>
			<div class="jumbotron well">
				<?php echo $_smarty_tpl->tpl_vars['qushi']->value['2'];?>

			</div>
			<div class="row marketing">
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<a id="modal-90773" href="#modal-container-90773" role="button" class="btn" data-toggle="modal">评论</a>
				</div>
				<div class="panel-body">
				<?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['commentitem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['commentitem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['commentitem']->value) {
$_smarty_tpl->tpl_vars['commentitem']->_loop = true;
$foreach_commentitem_Sav = $_smarty_tpl->tpl_vars['commentitem'];
?>
					<blockquote>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['commentitem']->value['3'];?>

						</p> 
					</blockquote>
					<hr/>
				<?php
$_smarty_tpl->tpl_vars['commentitem'] = $foreach_commentitem_Sav;
}
?>
					<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<form method="post" action="/Base/rooter.php?rooter=Comment/addCommentToDetail">
							<div class="modal-header">
								 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h3 id="myModalLabel">
									写写你的看法~
								</h3>
							</div>
							<div class="modal-body">
								  <div class="form-group">
								  	<input type="hidden" name="thingid" id="thingid" value="<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
" />
								    <label for="name">文本框</label>
								    <textarea class="form-control" name="comment" style="width:100%" rows="5"></textarea>
								  </div>
							</div>
							 
							<div class="modal-footer">
								 <button class="btn" data-dismiss="modal" aria-hidden="true">取消评论</button> <button class="btn btn-primary">发表评论</button>
							</div>
						</form>
					</div>
				</div>
				<div class="panel-footer">
					<div class="pagination">
						<ul>
							<li>
								<a href="#">上一页</a>
							</li>
							<li>
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li>
								<a href="#">下一页</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
</html><?php }
}
?>