<?php /* Smarty version 3.1.27, created on 2015-10-26 10:17:26
         compiled from "C:\wamp\www\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12331562dfdb68d3a21_40543667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993e215bb9889e405fab82a5b50bf48f5816754c' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\login.tpl',
      1 => 1445854644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12331562dfdb68d3a21_40543667',
  'variables' => 
  array (
    'data' => 0,
    'yzm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562dfdb692b9d7_23750946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562dfdb692b9d7_23750946')) {
function content_562dfdb692b9d7_23750946 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12331562dfdb68d3a21_40543667';
?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
    <?php echo '<script'; ?>
 src="../bootstrap/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    	$(function(){
    		$("#register").click(function(){
    			window.location.href="/Base/rooter.php?rooter=User/showadduser";
    		});
    	})
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['code'] != '') {?>
    	<?php echo '<script'; ?>
>
    	alert('<?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
');
    	<?php echo '</script'; ?>
>
    <?php }?>
</head>
<body class="container">

<div class="page-header">
  <h1>欢迎来围观哦~！ <small>赶快登录吧</small></h1>
</div>
<div style="margin-top: 10px;">
  <div class="jumbotron" style="float: left; width:60%">
      <h1>Hello, world!</h1>
      <p>...</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
  </div>
  <div class="alert alert-warning" style="margin-left:10px;float: left; width: 30%;">
      <form method="post" action="/Base/rooter.php?rooter=User/checkUser">
         <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">用户邮箱</span>
                    <input type="text" class="form-control" name="useremail" placeholder="请输入邮箱" aria-describedby="sizing-addon1">
         </div>
          <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">用户密码</span>
                    <input type="password" class="form-control" name="userpwd" placeholder="请输入用户密码" aria-describedby="sizing-addon1">
          </div>
          <div class="input-group input-group" style="width: 100%;margin-top: 10px">
                    <span class="input-group-addon" id="sizing-addon1">验证码：<?php echo $_smarty_tpl->tpl_vars['yzm']->value;?>
</span>
                    <input type="text" class="form-control" name="yzm" placeholder="请输入验证码" aria-describedby="sizing-addon1">

          </div>
          <div style="margin: 10px">
                    <button type="submit" class="btn btn-default">登录</button>
              		&nbsp;&nbsp;<a id="register">还没有账号？快去注册</a>
          </div>
      </form>
  </div>
</div>

</body>
</html>
<?php }
}
?>