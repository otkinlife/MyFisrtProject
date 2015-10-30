<?php /* Smarty version 3.1.27, created on 2015-10-30 09:48:24
         compiled from "C:\wamp\www\templates\mydetail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1960256333ce83f5613_85061433%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671b9e9cc702e3bdfed4e8c19390609ee0747ba7' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\mydetail.tpl',
      1 => 1446198500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1960256333ce83f5613_85061433',
  'variables' => 
  array (
    'flag' => 0,
    'username' => 0,
    'qushi' => 0,
    'comment' => 0,
    'commentitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56333ce8464da8_13412483',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56333ce8464da8_13412483')) {
function content_56333ce8464da8_13412483 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1960256333ce83f5613_85061433';
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
					相关评论
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