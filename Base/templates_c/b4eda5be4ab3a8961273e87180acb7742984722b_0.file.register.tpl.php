<?php /* Smarty version 3.1.27, created on 2015-10-25 03:37:47
         compiled from "D:\wamp\www\templates\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23193562c407bc12880_82188966%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4eda5be4ab3a8961273e87180acb7742984722b' => 
    array (
      0 => 'D:\\wamp\\www\\templates\\register.tpl',
      1 => 1445740665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23193562c407bc12880_82188966',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562c407bc75962_37677618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562c407bc75962_37677618')) {
function content_562c407bc75962_37677618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23193562c407bc12880_82188966';
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
        <?php if ($_smarty_tpl->tpl_vars['data']->value['code'] != '') {?>
    	alert('<?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
');
        <?php }?>
    <?php echo '</script'; ?>
>
</head>
<body class="container">
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
                <button type="buttton" class="btn btn-default">重置</button>
                <a href="/Base/rooter.php?rooter=User/login">赶快去登录吧</a>
            </div>
        </div>
    </form>
</div>
</body>
</html><?php }
}
?>