<?php /* Smarty version 3.1.27, created on 2015-10-21 06:40:45
         compiled from "C:\wamp\www\templates\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85205627336dace836_61283005%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68dfac3f9071c6cbbad55f2ee2d28cc422ca7ba4' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\test.tpl',
      1 => 1445409640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85205627336dace836_61283005',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5627336db15986_12470165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5627336db15986_12470165')) {
function content_5627336db15986_12470165 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85205627336dace836_61283005';
?>
<html>
<head>
<h1>test1</h1>
</head>
<?php echo '<script'; ?>
>
<?php if (!isset($_smarty_tpl->tpl_vars['data']) || !is_array($_smarty_tpl->tpl_vars['data']->value)) $_smarty_tpl->createLocalArrayVariable('data');
if ($_smarty_tpl->tpl_vars['data']->value['code'] = '000') {?>
alert("注册成功！");
<?php }?>
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>
<br/>
<?php echo $_smarty_tpl->tpl_vars['data']->value['res'];?>

</html><?php }
}
?>