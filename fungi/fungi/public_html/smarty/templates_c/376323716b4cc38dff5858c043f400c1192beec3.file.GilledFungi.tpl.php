<?php /* Smarty version Smarty-3.1.16, created on 2014-11-13 16:42:12
         compiled from "templates\GilledFungi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139745463a87d634f80-70744661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376323716b4cc38dff5858c043f400c1192beec3' => 
    array (
      0 => 'templates\\GilledFungi.tpl',
      1 => 1415893323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139745463a87d634f80-70744661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5463a87d88abc5_37222696',
  'variables' => 
  array (
    'characteristics' => 0,
    'cur' => 0,
    'Op_ID' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5463a87d88abc5_37222696')) {function content_5463a87d88abc5_37222696($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<body>
		<h1>Gilled Fungi</h1>
		
		<br>
		<br>
		
		<form id='Gilledform' action="gilledphp.php" method="POST">

			<?php  $_smarty_tpl->tpl_vars['char'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['char']->_loop = false;
 $_smarty_tpl->tpl_vars['cur'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['characteristics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['char']->key => $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->_loop = true;
 $_smarty_tpl->tpl_vars['cur']->value = $_smarty_tpl->tpl_vars['char']->key;
?>
				<h2><?php echo $_smarty_tpl->tpl_vars['cur']->value['Char_Name'];?>
</h2>
				<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['Op_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cur']->value['Option_Name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['Op_ID']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
					<label>
						<input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['Op_ID']->value;?>
" ..>
							<?php echo $_smarty_tpl->tpl_vars['option']->value;?>

					</label>
				<?php } ?>
			<?php } ?>

		</form>
	</body>


</html><?php }} ?>
