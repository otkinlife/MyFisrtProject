<?php /* Smarty version 3.1.27, created on 2015-10-23 11:09:55
         compiled from "C:\wamp\www\templates\personal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22697562a15830ddf36_08757187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f938a580674b7ed31d8b88c2de93f3e696a4575c' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\personal.tpl',
      1 => 1445598591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22697562a15830ddf36_08757187',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562a158311da40_34090528',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562a158311da40_34090528')) {
function content_562a158311da40_34090528 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22697562a15830ddf36_08757187';
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
					<li>
						<a href="#">主页</a>
					</li>
					<li class="active">
						<a href="/Base/rooter.php?rooter=User/showperson">个人</a>
					</li>
					<li>
						<a href="#">联系我</a>
					</li>
				</ul>
				<h3 class="text-muted">
					Let's see
				</h3>
			</div>
	<div class="row-fluid" style="margin-top:10px;">
		<div class="span8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">
						我的趣事
					</a>
					
					<span id="modal-90773" 
						data-toggle="modal"
						style = "float:right"
						href="#modal-container-90773"
						class="glyphicon glyphicon-plus" 
						aria-hidden="true">
					</span>
						
					</span>
				</div>
				<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">
								有什么开心的事，一起分享吧~！
							</h3>
						</div>
						<div class="modal-body">
							<form role="form">
							  <div class="form-group">
							    <label for="name">文本框</label>
							    <textarea class="form-control" style="width:100%" rows="5"></textarea>
							  </div>
							</form>
							
						</div>
						 
						<div class="modal-footer">
							 <button class="btn" data-dismiss="modal" aria-hidden="true">不发表了</button> 
							 <button class="btn btn-primary">发表出去</button>
						</div>
					</div>
				<div class="panel-body">
					Panel content
				</div>
				<div class="panel-footer">
					Panel footer
				</div>
			</div>
		</div>
		<div class="span4">
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<a class="panel-title">
						我的资料
					</h3>
				</div>
				<div class="panel-body">
					
				</div>
				<div class="panel-footer">
					Panel footer
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html><?php }
}
?>