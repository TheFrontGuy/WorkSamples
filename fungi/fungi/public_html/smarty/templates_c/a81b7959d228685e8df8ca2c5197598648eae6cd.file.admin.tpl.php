<?php /* Smarty version Smarty-3.1.16, created on 2014-03-31 01:08:46
         compiled from "C:\xampp\htdocs\soap\public_html\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26467531f80bb3cc863-06507403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a81b7959d228685e8df8ca2c5197598648eae6cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soap\\public_html\\templates\\admin.tpl',
      1 => 1395952715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26467531f80bb3cc863-06507403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531f80bb48e4b9_04297910',
  'variables' => 
  array (
    'userName' => 0,
    'categoryArray' => 0,
    'categories' => 0,
    'activityArray' => 0,
    'activities' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531f80bb48e4b9_04297910')) {function content_531f80bb48e4b9_04297910($_smarty_tpl) {?><!DOCTYPE html>
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
            <h4>Logged in as <?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
! <span class="glyphicon glyphicon-user"></span></h4>
        </div><!--end navbar-header-->
        <form class="navbar-form navbar-right">
            <a href="faculty.php"><button type="button" class="btn btn-success">Main</button></a>
            <button type="submit" class="btn btn-success">Logout</button>
        </form><!--end  navbar-form navbar-right--->
    </div><!--end container--->
</div><!--end navbar navbar-inverse navbar-fixed top-->
<div class="container">
    <div class="col-md-6 col-md-offset-2">
        <h3>Please Enter A Category</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Add Category Here</span>
                <input type="text" class="form-control" placeholder="Add Category" name="addCategory">
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        <h3>Please Enter an Activity</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="addCategoryActivity">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Add Activity Here</span>
                <input type="text" class="form-control" placeholder="Add Activity" name="addActivity">
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div><!--end col-md-6-->
</div><!--end container-->
<div class="container-fluid">
    <div class="col-md-3 col-md-offset-4">
        <h2>Delete Category Here</h2>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Delete Category</span>
                <select class="form-control" name="Delete_Category">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Delete Category</button>
        </form><!--end form--->
        <h2>Delete Activity Here</h2>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="deleteCategory">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Delete Activity</span>
                <select class="form-control" name="Delete_Activity">
                    <?php  $_smarty_tpl->tpl_vars['activities'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activities']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activities']->key => $_smarty_tpl->tpl_vars['activities']->value) {
$_smarty_tpl->tpl_vars['activities']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['activities']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Delete Activity</button>
        </form><!--end form--->
    </div><!--end col-md-4-->
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-2">
        <h3>Edit A Category</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Choose Category</span>
                <select class="form-control" name="chooseCategory">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Edit Category Here</span>
                <input type="text" class="form-control" placeholder="Edit Category" name="finalCategory">
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
        <h3>Edit an Activity</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="category">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Choose Activity</span>
                <select class="form-control" name="Choose_Activity">
                    <?php  $_smarty_tpl->tpl_vars['activities'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activities']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activities']->key => $_smarty_tpl->tpl_vars['activities']->value) {
$_smarty_tpl->tpl_vars['activities']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['activities']->value;?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Edit Activity Here</span>
                <input type="text" class="form-control" placeholder="Edit Activity" name="editActivity">
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Edit</button>
        </form>
    </div><!--end col-md-6-->
</div><!--end container-->

<div class="panel-footer">
    <div class="container">
        <p> This is going to be the footer for the site! </p>
        <p>© SOAP 2014</p>
    </div><!--end container-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- JavaScript code that changes things on the user interface side of the admin page-->
<script>
    $(document).ready(function(){
        $('.form-control option:selected').text();
    });
</script>

</body>
</html><?php }} ?>
