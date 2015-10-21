<?php /* Smarty version 3.1.27, created on 2015-10-21 11:43:35
         compiled from "C:\wamp\www\templates\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1613056277a671e80a3_45292341%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354d69dbe0c486a9c8682354e15b94806dfdf964' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\register.tpl',
      1 => 1445427812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613056277a671e80a3_45292341',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56277a672a6ac2_35455994',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56277a672a6ac2_35455994')) {
function content_56277a672a6ac2_35455994 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1613056277a671e80a3_45292341';
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
    
</head>
<body class="container">
	<?php if ($_smarty_tpl->tpl_vars['data']->value['code'] == '000') {?>
		<div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
</div>	    	
    <?php } else { if (!isset($_smarty_tpl->tpl_vars['data']) || !is_array($_smarty_tpl->tpl_vars['data']->value)) $_smarty_tpl->createLocalArrayVariable('data');
if ($_smarty_tpl->tpl_vars['data']->value['code'] = '001') {?>
    	<div class="alert alert-warning" role="alert"><?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
</div>
    <?php }}?>
<div class="page-header">
    <h1>欢迎来围观哦~！ <small>先注册一个账号吧</small></h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">注册用户</h3>
    </div>
    <form method="post" action="/Base/rooter.php?rooter=User/adduser">
        <div class="panel-body container">
            <div class="input-group" style="width: 60%">
                <span class="input-group-addon" id="sizing-addon1">用户邮箱</span>
                <input type="text" class="form-control"
                       placeholder="请输入邮箱"
                       name="emailname"
                       aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <select class="form-control" name="email" style="width: 110px;">
                    <option value ="@163.com">163.com</option>
                    <option value ="@163.com">126.com</option>
                    <option value ="@sina.com">sina.com</option>
                    <option value="@qq.com">qq.com</option>
                    <option value="@qq.com">outlook.com</option>
                </select>
            </div>
            <div class="input-group input-group" style="width: 50%;margin-top: 10px">
                <span class="input-group-addon" id="sizing-addon1">用户昵称</span>
                <input type="text" class="form-control" name="username" placeholder="请输入用户昵称" aria-describedby="sizing-addon1">
            </div>
            <div class="input-group input-group" style="width: 50%;margin-top: 10px">
                <span class="input-group-addon" id="sizing-addon1">用户密码</span>
                <input type="password" class="form-control" name="userpwd" placeholder="请输入用户密码" aria-describedby="sizing-addon1">
            </div>
            <div style="margin: 10px">
                <button type="submit" class="btn btn-default">注册</button>
                <button type="submit" class="btn btn-default">重置</button>
            </div>
        </div>
    </form>
</div>
</body>
</html><?php }
}
?>