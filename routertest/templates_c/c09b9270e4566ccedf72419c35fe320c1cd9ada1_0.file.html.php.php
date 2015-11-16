<?php /* Smarty version 3.1.27, created on 2015-11-05 07:17:55
         compiled from "C:\wamp\www\routertest\html.php" */ ?>
<?php
/*%%SmartyHeaderCode:22936563b02a358b362_45893882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09b9270e4566ccedf72419c35fe320c1cd9ada1' => 
    array (
      0 => 'C:\\wamp\\www\\routertest\\html.php',
      1 => 1446707870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22936563b02a358b362_45893882',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563b02a35c4d35_03485953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563b02a35c4d35_03485953')) {
function content_563b02a35c4d35_03485953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22936563b02a358b362_45893882';
?>
<html>
<head>
<?php echo '<script'; ?>
 type="text/javascript" src="../bootstrap/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
	$("#bt").click(function(){
	    alert("ok");
	});
});
<?php echo '</script'; ?>
>
</head>
<body>
<button id="bt" type="button">ajax</button>
</body>
</html><?php }
}
?>