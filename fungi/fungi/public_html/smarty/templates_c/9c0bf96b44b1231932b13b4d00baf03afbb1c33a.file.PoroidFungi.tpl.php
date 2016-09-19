<?php /* Smarty version Smarty-3.1.16, created on 2014-12-02 17:10:22
         compiled from "C:\xampp\htdocs\fungi\public_html\templates\PoroidFungi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166505465130e9de288-19407133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c0bf96b44b1231932b13b4d00baf03afbb1c33a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fungi\\public_html\\templates\\PoroidFungi.tpl',
      1 => 1417530279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166505465130e9de288-19407133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5465130ea79072_13266212',
  'variables' => 
  array (
    'characteristics' => 0,
    'char' => 0,
    'cur' => 0,
    'acur' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465130ea79072_13266212')) {function content_5465130ea79072_13266212($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<body>
		<h1>Poroid Fungi</h1>
		
		<br>
		<br>
		
		<form id='Poroidform' action="poroidphp.php" method="POST">
			
			<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_smarty_tpl->tpl_vars['cur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['characteristics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
 $_smarty_tpl->tpl_vars['cur']->value = $_smarty_tpl->tpl_vars['char']->key;
?>
					<h3><?php echo $_smarty_tpl->tpl_vars['char']->value['Name'];?>
</h3> <br>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['acur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['char']->value['Option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['acur']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<label>
							<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['cur']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['acur']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

						</label>				
					<?php } ?>
				<?php } ?>
				<br>
				<br>
				<input type="submit" value="Submit">

		</form>
	</body>


</html><?php }} ?>
