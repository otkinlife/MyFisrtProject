<?php /* Smarty version 3.1.27, created on 2015-10-22 04:07:24
         compiled from "C:\wamp\www\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11542562860fc793c69_36116435%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf84dd365989a30db2ab73eacd04c6a14af5d71e' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\index.tpl',
      1 => 1445486840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11542562860fc793c69_36116435',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562860fc7d8e90_63921332',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562860fc7d8e90_63921332')) {
function content_562860fc7d8e90_63921332 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11542562860fc793c69_36116435';
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
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="header">
				<ul class="nav nav-pills pull-right">
					<li class="active">
						<a href="#">主页</a>
					</li>
					<li>
						<a href="#">关于</a>
					</li>
					<li>
						<a href="#">联系我们</a>
					</li>
				</ul>
				<h3 class="text-muted">
					Let's see
				</h3>
			</div>
			<div class="jumbotron well">
				<h1>
					快来跟我们一起围观
				</h1>
				<p class="lead">
					世界那么大，我想去看看！这么多趣事等着你去发现，快乐就是这么简单~！
				</p>
				
			</div>
			<div class="row marketing">
			</div>
			<blockquote>
				<p>
					github是一个全球化的开源社区.
				</p> <small>关键词 <cite>开源</cite></small>
			</blockquote>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						趣事广场
					</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
				<div class="panel-footer">
					Panel footer
				</div>
			</div> <a id="modal-90773" href="#modal-container-90773" role="button" class="btn" data-toggle="modal">触发遮罩窗体</a>
			<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">
						标题栏
					</h3>
				</div>
				<div class="modal-body">
					<p>
						显示信息
					</p>
				</div>
				<div class="modal-footer">
					 <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button> <button class="btn btn-primary">保存设置</button>
				</div>
			</div>
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
</body>
</html><?php }
}
?>