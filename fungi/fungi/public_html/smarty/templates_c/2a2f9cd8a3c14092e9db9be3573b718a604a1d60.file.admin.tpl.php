<?php /* Smarty version Smarty-3.1.16, created on 2014-05-08 22:42:43
         compiled from "/home/soap/public_html/templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8391719975333a68eed6aa9-53036541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a2f9cd8a3c14092e9db9be3573b718a604a1d60' => 
    array (
      0 => '/home/soap/public_html/templates/admin.tpl',
      1 => 1399592736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8391719975333a68eed6aa9-53036541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5333a68f00fe28_25442883',
  'variables' => 
  array (
    'firstName' => 0,
    'adminArray' => 0,
    'admin' => 0,
    'categoryArray' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333a68f00fe28_25442883')) {function content_5333a68f00fe28_25442883($_smarty_tpl) {?><!DOCTYPE html>
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
        <form class="navbar-form navbar-right">
            <a href="faculty.php"><button type="button" class="btn btn-success">Main</button></a>
            <a href="logout.php"><button type="submit" class="btn btn-success">Logout</button></a>
        </form><!--end  navbar-form navbar-right--->
    </div><!--end container--->
</div><!--end navbar navbar-inverse navbar-fixed top-->
<div class="container">
    <div class="col-md-6 col-md-offset-2">
        <h3>Create Admin</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Create Admin</span>
                <select class="form-control" name="createAdmin" id="createAdmin">
                    <?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adminArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['facultyID'];?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['facultyName'];?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <button type="submit" id="createAdminButton" class="btn btn-success">Create</button>
        </form>
        <hr>
        <h3>Add A Category</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Add Category Here</span>
                <input type="text" class="form-control" placeholder="Add Category" name="addCategory">
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        <h3>Add an Activity</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="addCategoryActivity">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
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
    <div class="container">
    <div class="col-md-6 col-md-offset-2">
        <h3>Delete Category Here</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Delete Category</span>
                <select class="form-control" name="Delete_Category">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Delete Category</button>
        </form><!--end form--->
        <h3>Delete Activity Here</h3>
        <form method="post" action="admin.php">
            <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="deleteCategory" id="deleteCategory">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Delete Activity</span>
                <select class="form-control" id="deleteActivity" name="Delete_Activity">
                </select>
            </div><!--end input-group-->
            <button type="submit" class="btn btn-success">Delete Activity</button>
        </form><!--end form--->
    </div><!--end col-md-4-->
    </div><!--end container-->
</div><!--end container-fluid-->
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
                        <option><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
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
                <select class="form-control" name="category" id="editCategory">
                    <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['cat_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
</option>
                    <?php } ?>
                </select>
            </div><!--end input-group-->
            <div class="input-group">
                <span class="input-group-addon">Choose Activity</span>
                <select class="form-control" id="editActivity" name="Choose_Activity">

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
<script src="js/admin.js"></script>
<script>
    // Code to display a message that an admin was added
    $(document).ready(function(){
        $('#createAdminButton').click(function(){
            alert("Admin has been created!");
        });
    });
</script>

</body>
</html><?php }} ?>
