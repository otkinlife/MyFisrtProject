<?php /* Smarty version 3.1.27, created on 2015-11-06 03:59:41
         compiled from "C:\wamp\www\templates\html.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18776563c25ad9ff621_22061252%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd369c2a9a9e194e7f6ffac9db34738141090d6cd' => 
    array (
      0 => 'C:\\wamp\\www\\templates\\html.tpl',
      1 => 1446782373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18776563c25ad9ff621_22061252',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_563c25ada42e16_25448590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563c25ada42e16_25448590')) {
function content_563c25ada42e16_25448590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18776563c25ad9ff621_22061252';
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
	$("#bt").click(function(){
	    $.get("http://localhost:8080/index/index",function(response,status,xhr){
	    	 alert(response);
	    });
	});
});
<?php echo '</script'; ?>
>
</head>
<body>
<button id="bt" type="button">ajax</button>
<div id="dv" ></div>
</body>
</html><?php }
}
?>