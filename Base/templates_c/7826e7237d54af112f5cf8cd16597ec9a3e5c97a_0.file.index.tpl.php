<?php /* Smarty version 3.1.27, created on 2015-11-03 13:23:09
         compiled from "D:\wamp\www\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:189315638a72d49cfd1_51866920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7826e7237d54af112f5cf8cd16597ec9a3e5c97a' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\index.tpl',
      1 => 1446553225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189315638a72d49cfd1_51866920',
  'variables' => 
  array (
    'flag' => 0,
    'currentpage' => 0,
    'pagenum' => 0,
    'username' => 0,
    'data' => 0,
    'thing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5638a72d608ac7_99551184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5638a72d608ac7_99551184')) {
function content_5638a72d608ac7_99551184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '189315638a72d49cfd1_51866920';
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
	function cl(){
		$("#modal-90773").nodeName=""
	}
	<?php if ($_smarty_tpl->tpl_vars['flag']->value != '') {?>
		alert("<?php echo $_smarty_tpl->tpl_vars['flag']->value['message'];?>
");
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['currentpage']->value > $_smarty_tpl->tpl_vars['pagenum']->value) {?>
		alert("已经是最后一页");
		window.location.href = "/Base/rooter.php?rooter=User/index//<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
";
	<?php }?>
	$(function(){
		$("#bt").click(function(){
			if($("#ta").val()){
				$("#msg").hide();
				$('#fm').submit();
			}else{
				$("#msg").show();
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
					<li class="active">
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
				<h1>
					快来跟我们一起围观
				</h1>
				<p class="lead">
					世界那么大，我想去看看！这么多趣事等着你去发现，快乐就是这么简单~！
				</p>
				
			</div>
			<div class="row marketing">
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						趣事广场
					</h3>
				</div>
				<div class="panel-body">
				<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
					<a>评论数 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['thing']->value['num'];?>
</span></a>
					<a href="/Base/rooter.php?rooter=Thing/showDetail/<?php echo $_smarty_tpl->tpl_vars['thing']->value['0'];?>
//1" role="button" class="btn">查看详情</a>
					<a id="modal-90773" href="#modal-container-90773" role="button"

					   class="btn" data-toggle="modal" data-js="<?php echo $_smarty_tpl->tpl_vars['thing']->value['0'];?>
">
						发表评论
					</a>
					<hr/>
				<?php
$_smarty_tpl->tpl_vars['thing'] = $foreach_thing_Sav;
}
?>
					<div id="modal-container-90773" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 id="myModalLabel">
								写写你的看法~
							</h3>
						</div>
						<form id="fm" method="post" action="/Base/rooter.php?rooter=Comment/addComment">
							<div class="modal-body">
							<div class="form-group">
							  	<input type="hidden" name="thingid" id="thingid" value="<?php echo $_smarty_tpl->tpl_vars['thing']->value['0'];?>
" />
							    <label for="name" id="aaa">文本框</label>
							    <span id="msg" style="color: Red; display: none; font-size: 10pt; font-weight: bold; font-family: Andalus;">评论内容不能为空!</span>
							    <textarea id="ta" name="comment" class="form-control" style="width:100%" rows="5"></textarea>
							  </div>

							</div>
						<div class="modal-footer">
							 <button class="btn" data-dismiss="modal" aria-hidden="true">取消评论</button>
							 <button id="bt" type="button" class="btn btn-primary">发表评论</button>
						</div>
						</form>
					</div>
				
				</div>
				<div class="panel-footer">
					<div class="pagination">
						<ul>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//1">首页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//<?php echo $_smarty_tpl->tpl_vars['currentpage']->value-1;?>
">上一页</a>
							</li>
							<li>
								<a>当前第<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//<?php echo $_smarty_tpl->tpl_vars['currentpage']->value+1;?>
">下一页</a>
							</li>
							<li>
								<a href="/Base/rooter.php?rooter=User/index//<?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
">尾页</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>
	$(".btn").click(function(){
		$("#modal-container-90773").attr('aria-hidden',false);
		$("#thingid").attr('value',$(this).attr("data-js"));
	})

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>