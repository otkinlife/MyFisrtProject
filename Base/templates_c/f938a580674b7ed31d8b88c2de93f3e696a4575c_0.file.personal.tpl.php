<?php /* Smarty version 3.1.27, created on 2015-10-26 09:57:26
         compiled from "C:\wamp\www\templates\personal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7709562df906a896a1_90826878%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f938a580674b7ed31d8b88c2de93f3e696a4575c' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\personal.tpl',
      1 => 1445853123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7709562df906a896a1_90826878',
  'variables' => 
  array (
    'data' => 0,
    'username' => 0,
    'res' => 0,
    'thing' => 0,
    'person' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562df906b218f1_46810721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562df906b218f1_46810721')) {
function content_562df906b218f1_46810721 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7709562df906a896a1_90826878';
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
	<?php if ($_smarty_tpl->tpl_vars['data']->value['code'] != '') {?>
		alert('<?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
');
	<?php }?>
<?php echo '</script'; ?>
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
					<li class="active">
						<a href="/Base/rooter.php?rooter=User/showperson">个人</a>
					</li>
					<li>
						<a id="logout">登出</a>
					</li>
				</ul>
				<h5 class="text-muted">
					欢迎您<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

				</h5>

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
				<form action="/Base/rooter.php?rooter=Thing/addThing" method="post">
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
									<textarea class="form-control" name="thingcontent" style="width:100%" rows="5"></textarea>
								  </div>
								</form>

							</div>

							<div class="modal-footer">
								 <button class="btn" data-dismiss="modal" aria-hidden="true">不发表了</button>
								 <input type="submit" class="btn btn-primary" value="发表出去"/>
							</div>
						</div>
					</form>
				<div class="panel-body">
					<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['thing'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['thing']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thing']->value) {
$_smarty_tpl->tpl_vars['thing']->_loop = true;
$foreach_thing_Sav = $_smarty_tpl->tpl_vars['thing'];
?>
						<blockquote>
							<p>
								<?php echo $_smarty_tpl->tpl_vars['thing']->value['2'];?>

							</p> 
						</blockquote>
						<a>评论数 <span class="badge">50</span></a>
						<a href="/Base/rooter.php?rooter=Thing/showDetail" role="button" class="btn">查看详情</a>
						<hr/>
					<?php
$_smarty_tpl->tpl_vars['thing'] = $foreach_thing_Sav;
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
		<div class="span4">
			<a href="#" class="list-group-item active">
			   	<img src='../upload/test.jpg' width="50px;" height="50px;">&nbsp;&nbsp;<span>我的资料</span>
			</a>
			<a class="list-group-item">
				我的id：<?php echo $_smarty_tpl->tpl_vars['person']->value['0']['0'];?>

			</a>
			<a class="list-group-item">
				我的邮箱：<?php echo $_smarty_tpl->tpl_vars['person']->value['0']['1'];?>

			</a>
			<a href="#" class="list-group-item">
				我的昵称：<?php echo $_smarty_tpl->tpl_vars['person']->value['0']['2'];?>

			</a>
			<a href="#" class="list-group-item">共发表了12条趣事</a>
		</div>
	</div>
</div>
</body>
</html><?php }
}
?>