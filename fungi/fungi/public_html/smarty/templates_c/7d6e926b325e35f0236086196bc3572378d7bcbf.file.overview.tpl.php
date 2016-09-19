<?php /* Smarty version Smarty-3.1.16, created on 2014-03-19 01:29:07
         compiled from "C:\xampp\htdocs\soap\public_html\templates\overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58235320166ba0ba70-42203201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6e926b325e35f0236086196bc3572378d7bcbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soap\\public_html\\templates\\overview.tpl',
      1 => 1395188943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58235320166ba0ba70-42203201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5320166ba76472_26516239',
  'variables' => 
  array (
    'userName' => 0,
    'firstName' => 0,
    'fullName' => 0,
    'year' => 0,
    'gpa' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5320166ba76472_26516239')) {function content_5320166ba76472_26516239($_smarty_tpl) {?><!DOCTYPE html>
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
<div id="overview" class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
's Information</h1>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div id="mainInfo" class="studentInfo">
                <h3>Main Information</h3>
                <p><strong>Name: </strong> <?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</p>
                <p><strong>Year: </strong> <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</p>
                <p><strong>GPA: </strong> <?php echo $_smarty_tpl->tpl_vars['gpa']->value;?>
</p>
                <p><strong>School: </strong> <?php echo $_smarty_tpl->tpl_vars['school']->value;?>
</p>
            </div><!--end studentInfo-->
            <div id="goals" class="studentInfo">
                <h3>Goals</h3>
                <p>To grow in Christ</p>
                <p>To become a better student</p>
                <p>Do my best at my internship</p>
            </div><!--end studentInfo-->
            <div id="achievements" class="studentInfo">
                <h3>Achievements</h3>
                <p><strong>Name: </strong> <?php echo $_smarty_tpl->tpl_vars['fullName']->value;?>
</p>
                <p><strong>Year: </strong> <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</p>
                <p><strong>GPA: </strong> <?php echo $_smarty_tpl->tpl_vars['gpa']->value;?>
</p>
                <p><strong>School: </strong> <?php echo $_smarty_tpl->tpl_vars['school']->value;?>
</p>
            </div><!--end studentInfo-->
            <div id="clubs" class="studentInfo">
                <h3>Clubs</h3>
                <ul class="list-group">
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                    <li class="list-group-item">Baseball</li>
                </ul>
            </div><!--end studentInfo-->
        </div><!--end col-sm-8 blog-main-->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="list-group">
                <a href="#mainInfo" class="list-group-item overview">Main Information</a>
                <a href="#goals" class="list-group-item overview">Goals</a>
                <a href="#achievements" class="list-group-item overview">Achievements</a>
                <a href="#clubs" class="list-group-item overview">Clubs</a>
            </div>
            <a href="#top"><h1><span class="glyphicon glyphicon-chevron-up"></span></h1></a>
        </div><!--end col-sm-3 col-sm-offset-->
    </div><!--end row-->
</div><!--end oontainer-->

<div class="panel-footer">
    <div class="container">
        <p> This is going to be the footer for the site! </p>
        <p>© SOAP 2014</p>
    </div><!--end container-->
</div>

</body>
</html>
<?php }} ?>
