<?php /* Smarty version Smarty-3.1.16, created on 2014-05-09 10:51:44
         compiled from "/home/soap/public_html/templates/faculty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4083693315333a676875770-44836293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a3ec68adc92b45673cfd3b0d5f5052e0d7329a' => 
    array (
      0 => '/home/soap/public_html/templates/faculty.tpl',
      1 => 1399647102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4083693315333a676875770-44836293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5333a6768c1aa4_48619486',
  'variables' => 
  array (
    'firstName' => 0,
    'isAdmin' => 0,
    'studentYear' => 0,
    'studentArray' => 0,
    'ID' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333a6768c1aa4_48619486')) {function content_5333a6768c1aa4_48619486($_smarty_tpl) {?><!DOCTYPE html>
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
<div class="navbar navbar-inverse" id="facultyNavbar">
    <div class="container">
        <div class="navbar-header">
            <h4>Logged in as <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
! <span class="glyphicon glyphicon-user"></span></h4>
        </div><!--end navbar-header-->
		<form action="logout.php" class="navbar-form navbar-right">
            <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value==1) {?>
                <a href="admin.php"><button type="button" class="btn btn-success">Admin</button></a>
            <?php }?>
            <button type="submit" class="btn btn-success">Logout</button>
        </form><!--end  navbar-form navbar-right--->
    </div><!--end container--->
</div><!--end navbar navbar-inverse navbar-fixed top-->
<div class="container-fluid" id="background">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1>Search Student</h1>
            <form action="faculty.php" id="search" method="get">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    <input name="q" size="40" value="" type="text" class="form-control" placeholder="Search Student">
                </div>
                <button type="submit" id="btn-search" class="btn btn-success">Search</button>
            </form>
        </div><!--end col-md-6 col-md-offset-3--->
        <ul class="nav nav-tabs nav-justified">
            <li class="active" id="freshman"><a href="faculty.php?year=Freshman">Freshman</a></li>
            <li class="active" id="sophomore"><a href="faculty.php?year=Sophomore">Sophomore</a></li>
            <li class="active" id="junior"><a href="faculty.php?year=Junior">Junior</a></li>
            <li class="active" id="senior"><a href="faculty.php?year=Senior">Senior</a></li>
        </ul><!--nav nav-tabs nav-justified--->
    </div><!--end classes--->
</div><!--end container-fluid--->
<div class="container">
    <div id="classes" class="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['studentYear']->value;?>
</h1>
        <div id="students" class="container">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['studentArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
                    <li class="list-group-item"><a href="overview.php?student=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['student']->value;?>
</a></li>
                <?php } ?>
            </ul>
        </div><!--end students-->
    </div><!--end container-->
</div><!--end container-->
<div class="panel-footer">
    <div class="container">
        <p> This is going to be the footer for the site! </p>
        <p>© SOAP 2014</p>
    </div><!--end container-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html><?php }} ?>
