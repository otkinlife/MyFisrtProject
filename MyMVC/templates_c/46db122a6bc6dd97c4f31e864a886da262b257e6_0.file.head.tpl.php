<?php /* Smarty version 3.1.27, created on 2015-11-18 08:57:09
         compiled from "C:\wamp\www\MyMVC\templates\head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11867564c3d65dc9f45_34405417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46db122a6bc6dd97c4f31e864a886da262b257e6' => 
    array (
      0 => 'C:\\wamp\\www\\MyMVC\\templates\\head.tpl',
      1 => 1447837007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11867564c3d65dc9f45_34405417',
  'variables' => 
  array (
    'username' => 0,
    'yzm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564c3d65e46ee7_33376257',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564c3d65e46ee7_33376257')) {
function content_564c3d65e46ee7_33376257 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11867564c3d65dc9f45_34405417';
?>

<div class="header">
	<ul class="nav nav-pills pull-right">
		<li class="active">
			<?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?>
				<a href="#">主页</a>
			<?php } else { ?>
				<a id="cli1">主页</a>
			<?php }?>
		</li>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?>
				<a href="#">个人</a>
			<?php } else { ?>
				<a id="cli2">个人</a>
			<?php }?>
			
		</li>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?>
				<a id="logout">退出</a>
			<?php } else { ?>
				<a id="modal-90773" href="#modal-container-90771" data-toggle="modal">
					   登录
				</a>
			<?php }?>
		</li>
	</ul>
	<h5 class="text-muted">
		欢迎您:
		<?php if ($_smarty_tpl->tpl_vars['username']->value != '') {?>
			<b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>
		<?php } else { ?>
			游客
		<?php }?>
	</h5>
</div>
<div id="modal-container-90771" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">
			赶快登录~！
		</h3>
	</div>
	<form method="post" action="" style="margin-left:10%; margin-top:10px;">
		<div style="float:left; margin-bottom:30px;">
	         <div class="input-group input-group" >
	            <span class="input-group-addon" id="sizing-addon1">用户邮箱：</span>
	            <input type="text" class="form-control" name="useremail" placeholder="请输入邮箱" style="height:30px;">
	         </div>
	         <div class="input-group input-group">
	            <span class="input-group-addon" id="sizing-addon1">用户密码：</span>
	            <input type="password" class="form-control" name="userpwd" placeholder="请输入用户密码" style="height:30px;">
	         </div>
	         <div class="input-group input-group">
	            <span class="input-group-addon" id="sizing-addon1">验&nbsp;证&nbsp;码&nbsp;：<?php echo $_smarty_tpl->tpl_vars['yzm']->value;?>
</span>
	            <input type="text" class="form-control" name="yzm" placeholder="请输入验证码" style="height:30px;">
	         </div>
         </div>
         <div style="float:left; margin-left:20px;">
            <button type="button" class="btn btn-lg" style="margin-bottom:13px;">
		     	 登录
		    </button><br/>
		    <button id='clear' type="button" class="btn btn-lg" style="margin-bottom:13px;">
		     	 重置
		    </button><br/>
      		&nbsp;&nbsp;<a id="register">还没有账号？快去注册</a>
         </div>
      </form>
</div>
<?php echo '<script'; ?>
>
	$(function(){
		$("#cli1").click(function(){
			alert("请先登录");
		});
		$("#cli2").click(function(){
			alert("请先登录");
		});
		$("#clear").click(function(){
			$("form").find(':input').not(':button, :submit, :reset').val('')
			.removeAttr('checked').removeAttr('selected');
		})
	})
<?php echo '</script'; ?>
><?php }
}
?>