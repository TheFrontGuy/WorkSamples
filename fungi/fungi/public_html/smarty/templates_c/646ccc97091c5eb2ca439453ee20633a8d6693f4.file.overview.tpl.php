<?php /* Smarty version Smarty-3.1.16, created on 2014-05-09 04:17:09
         compiled from "/home/soap/public_html/templates/overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129100290853332249c46e43-37803116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646ccc97091c5eb2ca439453ee20633a8d6693f4' => 
    array (
      0 => '/home/soap/public_html/templates/overview.tpl',
      1 => 1399623160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129100290853332249c46e43-37803116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53332249c94a14_25654656',
  'variables' => 
  array (
    'userName' => 0,
    'firstName' => 0,
    'fullName' => 0,
    'year' => 0,
    'gpa' => 0,
    'school' => 0,
    'major' => 0,
    'goalError' => 0,
    'goalArray' => 0,
    'goals' => 0,
    'expError' => 0,
    'experienceArray' => 0,
    'experience' => 0,
    'actError' => 0,
    'studentActArray' => 0,
    'activities' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53332249c94a14_25654656')) {function content_53332249c94a14_25654656($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOAP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
    <div class="pic">
        <img src="img/profile.png" class="img-responsive img-thumbnail" alt="Profile Pic"/>
    </div>
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
                <p><strong>Major: </strong> <?php echo $_smarty_tpl->tpl_vars['major']->value;?>
</p>
            </div><!--end studentInfo-->
            <div id="goals" class="studentInfo">
                <h3>Goals</h3>
                <?php if (isset($_smarty_tpl->tpl_vars['goalError']->value)) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['goalError']->value;?>
</p>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['goals'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goals']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goalArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goals']->key => $_smarty_tpl->tpl_vars['goals']->value) {
$_smarty_tpl->tpl_vars['goals']->_loop = true;
?>
                    <p class="list-group-item-text" id="<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalOID'];?>
">
                        <span class="glyphicon glyphicon-asterisk"></span>
                        <?php echo $_smarty_tpl->tpl_vars['goals']->value['goal'];?>

                    </p><hr>
                <?php } ?>
            </div><!--end studentInfo-->
            <div id="experiences" class="studentInfo">
                <h3>Experiences</h3>
                <?php if (isset($_smarty_tpl->tpl_vars['expError']->value)) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['expError']->value;?>
</p>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['experience'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['experience']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['experienceArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['experience']->key => $_smarty_tpl->tpl_vars['experience']->value) {
$_smarty_tpl->tpl_vars['experience']->_loop = true;
?>
                    <h4 class="list-group-item-heading">Title: <?php echo $_smarty_tpl->tpl_vars['experience']->value['expName'];?>
</h4>
                    <p class="list-group-item-text" id="<?php echo $_smarty_tpl->tpl_vars['experience']->value['expID'];?>
"><i>Description:</i> <?php echo $_smarty_tpl->tpl_vars['experience']->value['description'];?>
</p><hr>
                <?php } ?>
            </div><!--end studentInfo-->
            <div id="clubs" class="studentInfo">
                <h3>Clubs & Activities</h3>
                <?php if (isset($_smarty_tpl->tpl_vars['actError']->value)) {?>
                    <p><?php echo $_smarty_tpl->tpl_vars['actError']->value;?>
</p>
                <?php } else { ?>
                <div id="accordion">
                    <?php  $_smarty_tpl->tpl_vars['activities'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activities']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studentActArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activities']->key => $_smarty_tpl->tpl_vars['activities']->value) {
$_smarty_tpl->tpl_vars['activities']->_loop = true;
?>
                        <h3 class="clubs" id="overviewAct<?php echo $_smarty_tpl->tpl_vars['activities']->value['actID'];?>
"><?php echo $_smarty_tpl->tpl_vars['activities']->value['title'];?>
</h3>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['activities']->value['reflection']==null) {?>
                                <p>There is no description for this activity available.</p>
                            <?php }?>
                            <p><?php echo $_smarty_tpl->tpl_vars['activities']->value['reflection'];?>
</p>
                        </div>
                    <?php } ?>
                </div><!--end accordian-->
                <?php }?>
            </div><!--end studentInfo-->
        </div><!--end col-sm-8 blog-main-->
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="list-group">
                <a href="#mainInfo" class="list-group-item overview">Main Information</a>
                <a href="#goals" class="list-group-item overview">Goals</a>
                <a href="#experiences" class="list-group-item overview">Experiences</a>
                <a href="#clubs" class="list-group-item overview">Clubs & Activities</a>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script>
    $(function() {
        $( "#accordion" ).accordion({
        heightStyle: "content"
        });
    });
</script>

</body>
</html>
<?php }} ?>
