<?php /* Smarty version 3.1.27, created on 2015-11-03 03:05:48
         compiled from "C:\wamp\www\templates\detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:195885638248c4320b9_33913752%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '481c9068197f7f93422d734dd906381dc3f41d79' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\detail.tpl',
      1 => 1446519937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195885638248c4320b9_33913752',
  'variables' => 
  array (
    'flag' => 0,
    'currentpage' => 0,
    'pagenum' => 0,
    'thingid' => 0,
    'username' => 0,
    'qushi' => 0,
    'comment' => 0,
    'commentitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5638248c4bdfa2_51020911',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5638248c4bdfa2_51020911')) {
function content_5638248c4bdfa2_51020911 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '195885638248c4320b9_33913752';
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
	<?php if ($_smarty_tpl->tpl_vars['currentpage']->value > $_smarty_tpl->tpl_vars['pagenum']->value) {?>
		alert("已经是最后一页");
		window.location.href = "/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
//<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
";
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
								<a href="/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
//1">首页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
//<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;?>
">上一页</a>
							</li>
							<li>
								<a>当前第<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
//<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;?>
">下一页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thingid']->value;?>
//<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
">尾页</a>
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