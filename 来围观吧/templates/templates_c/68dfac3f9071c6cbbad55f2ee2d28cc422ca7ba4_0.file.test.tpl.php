<?php /* Smarty version 3.1.27, created on 2015-10-21 02:34:39
         compiled from "C:\wamp\www\templates\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:312285626f9bfa083c6_37727748%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68dfac3f9071c6cbbad55f2ee2d28cc422ca7ba4' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\test.tpl',
      1 => 1445394407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312285626f9bfa083c6_37727748',
  'variables' => 
  array (
    'var1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5626f9bfa723c2_59370897',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5626f9bfa723c2_59370897')) {
function content_5626f9bfa723c2_59370897 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '312285626f9bfa083c6_37727748';
?>
<h1>test1</h1>
<?php echo $_smarty_tpl->tpl_vars['var1']->value;

}
}
?>