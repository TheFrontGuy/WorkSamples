<?php /* Smarty version Smarty-3.1.16, created on 2014-12-17 15:56:15
         compiled from "C:\xampp\htdocs\fungi\public_html\templates\GilledResultsPg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39335489a4fa9eff77-82389111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec6b9a82d0ea3b5687efa7b98061d4e20c4392d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fungi\\public_html\\templates\\GilledResultsPg.tpl',
      1 => 1418828170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39335489a4fa9eff77-82389111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5489a4faa179d7_28637413',
  'variables' => 
  array (
    'q' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489a4faa179d7_28637413')) {function content_5489a4faa179d7_28637413($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<body>
		<h1>Results</h1>
		
		<br>
		<br>
		<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['q']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<div><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
 <br> </div> <br>
			
		<?php } ?>

		<a href='shroomsstartportal.html'><label id="gilled">back to portal</label></a>
		
	</body>

</html><?php }} ?>
