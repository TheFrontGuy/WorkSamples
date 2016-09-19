<?php /* Smarty version Smarty-3.1.16, created on 2014-04-25 13:13:13
         compiled from "/home/soap/public_html/templates/build.tpl" */ ?>
<?php /*%%SmartyHeaderCode:922079635535a97a9e83166-16202322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5a2c35afcefbbf230a6011ec920808f331d825' => 
    array (
      0 => '/home/soap/public_html/templates/build.tpl',
      1 => 1398445897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '922079635535a97a9e83166-16202322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'firstName' => 0,
    'catList' => 0,
    'j' => 0,
    'max' => 0,
    'ID' => 0,
    'catNames' => 0,
    'catActs' => 0,
    'catID' => 0,
    'actID' => 0,
    'actNames' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535a97a9ee5379_85092931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a97a9ee5379_85092931')) {function content_535a97a9ee5379_85092931($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOAP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <h4>Logged in as <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
! <span class="glyphicon glyphicon-user"></span></h4>
        </div><!--end navbar-header-->
        <form action="logout.php" class="navbar-form navbar-right">
            <button type="submit" class="btn btn-success">Logout</button>
        </form><!--end  navbar-form navbar-right--->
    </div><!--end container--->
</div><!--end navbar navbar-inverse navbar-fixed top-->
    <div class="container">
		<?php  $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ID']->_loop = false;
 $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->key => $_smarty_tpl->tpl_vars['ID']->value) {
$_smarty_tpl->tpl_vars['ID']->_loop = true;
 $_smarty_tpl->tpl_vars['number']->value = $_smarty_tpl->tpl_vars['ID']->key;
?>
		
			<?php if ($_smarty_tpl->tpl_vars['j']->value==$_smarty_tpl->tpl_vars['max']->value) {?>
			
			<?php } else { ?>
				<h1><?php echo $_smarty_tpl->tpl_vars['catNames']->value[$_smarty_tpl->tpl_vars['ID']->value];?>
</h1>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['catID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catID']->_loop = false;
 $_smarty_tpl->tpl_vars['actID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['catActs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catID']->key => $_smarty_tpl->tpl_vars['catID']->value) {
$_smarty_tpl->tpl_vars['catID']->_loop = true;
 $_smarty_tpl->tpl_vars['actID']->value = $_smarty_tpl->tpl_vars['catID']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['catID']->value==$_smarty_tpl->tpl_vars['ID']->value) {?>
						<li><?php echo $_smarty_tpl->tpl_vars['actNames']->value[$_smarty_tpl->tpl_vars['actID']->value];?>
</li>
					<?php }?>
				<?php } ?>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['j']->value++;?>

		<?php } ?>
        <a href="student.php"><button type="button" class="btn btn-group-lg">Back to Student Page</button></a>
    </div>
</body>
</html>
<?php }} ?>
