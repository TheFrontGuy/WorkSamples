<?php /* Smarty version Smarty-3.1.16, created on 2014-11-13 14:46:27
         compiled from "templates\PoroidFungi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298005464b5fd7ab507-83675608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d21ed8e580e9bdaf48a59948c4207acf3ad22de' => 
    array (
      0 => 'templates\\PoroidFungi.tpl',
      1 => 1415886378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298005464b5fd7ab507-83675608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5464b5fd83ebf4_17328662',
  'variables' => 
  array (
    'characteristics' => 0,
    'Char_Name' => 0,
    'char' => 0,
    'Option_Name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5464b5fd83ebf4_17328662')) {function content_5464b5fd83ebf4_17328662($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<body>
		<h1>Poroid Fungi</h1>
		
		<br>
		<br>
		
		<form id='Poroidform' action="poroidphp.php" method="POST">

			<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['characteristics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
?>
				<h2><?php echo $_smarty_tpl->tpl_vars['Char_Name']->value;?>
</h2>
				<?php  $_smarty_tpl->tpl_vars['Op_ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Op_ID']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['char']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Op_ID']->key => $_smarty_tpl->tpl_vars['Op_ID']->value) {
$_smarty_tpl->tpl_vars['Op_ID']->_loop = true;
?>
					<label>
						<input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['Option_Name']->value;?>
" >
							<?php echo $_smarty_tpl->tpl_vars['Option_Name']->value;?>

					</label>
				<?php } ?>
			<?php } ?>

		</form>
	</body>


</html><?php }} ?>
