<?php /* Smarty version Smarty-3.1.16, created on 2014-05-08 00:28:42
         compiled from "/home/soap/public_html/templates/student.tpl" */ ?>
<?php /*%%SmartyHeaderCode:981653477533321ef4f1435-65466325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02b1baa847a643b33e28e6080d50e05fcad3e5b' => 
    array (
      0 => '/home/soap/public_html/templates/student.tpl',
      1 => 1399523316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981653477533321ef4f1435-65466325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533321ef556f71_75793600',
  'variables' => 
  array (
    'firstName' => 0,
    'semesterError' => 0,
    'semesterArray' => 0,
    'semes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533321ef556f71_75793600')) {function content_533321ef556f71_75793600($_smarty_tpl) {?><!DOCTYPE html>
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
<div class="container" id="personal">
    <span class="glyphicon glyphicon-chevron-down"></span>
    <h3>Please Enter Your Information</h3>
    <form id="updateProfile" action="updateProfile.php" method="post">
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">First Name</span>
                <input type="text" class="form-control" placeholder="First Name" name="First_Name">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Last Name</span>
                <input type="text" class="form-control" placeholder="Last Name" name="Last_Name">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Major</span>
                <input type="text" class="form-control" placeholder="Major" name="Major">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Minor</span>
                <input type="text" class="form-control" placeholder="Minor" name="Minor">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Home Number</span>
                <input type="text" class="form-control" placeholder="Home number" name="Home_Number">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Year</span>
                <select class="form-control" name="Year">
                    <option disabled selected>Select a Year</option>
                    <option>Freshman</option>
                    <option>Sophomore</option>
                    <option>Junior</option>
                    <option>Senior</option>
                </select>
            </div><!--end input-group--><br>
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-addon">City</span>
                <input type="text" class="form-control" placeholder="City" name="City">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">State</span>
                <input type="text" class="form-control" placeholder="State" name="State">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">G.P.A</span>
                <input type="text" class="form-control" placeholder="G.P.A" name="GPA">
            </div><!--end input-group--><br>
            <div class="input-group">
                <span class="input-group-addon">Cell Number</span>
                <input type="text" class="form-control" placeholder="Cell Number" name="Cell_Number">
            </div><!--end input-group--><br>
            <div class="form-group input-group">
                <span class="input-group-addon">Profile Picture</span>
                <input type="file" id="profilePic" name="Image">
            </div><!--end form-group input-group--><br>
        </div><!--end col-lg-6-->
        <button type="submit" class="btn btn-success">Submit</button>
    </form><!--end updateProfile form-->
</div><!--end container-->
<div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['semesterError']->value)) {?>
        <h3><?php echo $_smarty_tpl->tpl_vars['semesterError']->value;?>
</h3>
    <?php }?>
    <div class="jumbotron">
        <p><span class="glyphicon glyphicon-chevron-up">Edit</span></p>
        <h1>Welcome <?php echo $_smarty_tpl->tpl_vars['firstName']->value;?>
!</h1>
        <div class="pic">
            <img src="img/profile.png" class="img-responsive img-thumbnail" alt="Profile Pic"/>
        </div>
        <p class="lead">This website will make it easier for you to enter your resume information such
            as achievements, clubs, activities etc. Below is a collection of the semesters you would
            take here at Messiah. Click on the semesters below and enter your information for that semester.</p>
        
        <a href="resume.php"><button type="button" class="btn btn-group-lg">View Resume</button></a>
        <a href="#"><button type="button" data-toggle="modal" data-target="#resumeModal" class="btn btn-group-lg">Upload Resume</button></a>
        <form action="resume.php" method="post">
            <div id="resumeModal" class="modal fade">
                <div class="modal-dialog modal-small">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Resume Upload</h3>
                        </div>
                        <div class="modal-body">
                            <input type="file" id="resumeUpload" name="Resume">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>
    </div><!--end jumbotron-->
    <button type="button" class="btn btn-group-lg" data-toggle="modal" data-target="#createModal">Create New Semester</button>
    <div class="row marketing">
        <div class="col-md-6 col-md-offset-3">
            <?php  $_smarty_tpl->tpl_vars['semes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['semes']->_loop = false;
 $_smarty_tpl->tpl_vars['semesterID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['semesterArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['semes']->key => $_smarty_tpl->tpl_vars['semes']->value) {
$_smarty_tpl->tpl_vars['semes']->_loop = true;
 $_smarty_tpl->tpl_vars['semesterID']->value = $_smarty_tpl->tpl_vars['semes']->key;
?>
            <a href="#personalModal<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
" data-toggle="modal" data-target="#personalModal<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
">
                <h4><?php echo $_smarty_tpl->tpl_vars['semes']->value['semester'];?>
</h4></a>
            <p>After clicking the link above, please enter all of your achievements for the <?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterName'];?>
 of
                <?php echo $_smarty_tpl->tpl_vars['semes']->value['year'];?>
.</p>
                <div class="modal fade" id="personalModal<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
" tabindex="-1">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Would you like to?</h4>
                            </div><!--end modal-header-->

                            <div class="modal-body">
                                <a href="semester.php?semester=<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
">
                                    <button type="button" class="btn btn-group-lg">Edit Semester</button></a>
                                <a href="student.php?dels=<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
">
                                    <button type="button" class="btn btn-group-lg">Delete Semester</button>
                                </a><br><br>
                                <a class="btnEditName"><button type="button" class="btn btn-group-lg">Edit Name</button></a>

                                <form action="student.php?edits=<?php echo $_smarty_tpl->tpl_vars['semes']->value['semesterID'];?>
" method="post" class="editSemesterName">
                                    <h4>Edit the Semester Name:</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">Edit Semester</span>
                                        <input type="text" class="form-control" placeholder="Edit Semester" name="editSemester">
                                    </div><!--end input-group-->
                                    <div class="input-group">
                                        <span class="input-group-addon">Edit Year</span>
                                        <input type="text" class="form-control" placeholder="Edit Semester Year" name="editYear">
                                    </div><!--end input-group-->
                                    <p>Please fill out both input boxes!</p>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form><!--end form-->
                            </div><!--end modal-body-->

                        </div><!--end modal-content-->
                    </div><!--end modal-dialog modal-sm-->
                </div><!--end modal-fade-->
            <?php } ?>
        </div><!--end col-md-6-->
    </div><!--end row marketing-->
</div><!--end container-->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Please choose your semester/year!</h5>
            </div><!--end modal-header-->
            <div class="modal-body">
                <form id="semesterForm" action="student.php" method="post">
                    <div class="input-group">
                        <span class="input-group-addon">Semester</span>
                        <select class="form-control" name="semester">
                            <option>Fall</option>
                            <option>Spring</option>
                        </select>
                    </div><!--end input-group--><br>
                    <div class="input-group">
                        <span class="input-group-addon">Year</span>
                        <select class="form-control" name="year">
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                    </div><!--end input-group--><br>
                    <button type="submit" class="btn btn-group-lg">Save</button>
                    <button type="button" data-dismiss="modal" class="btn btn-group-lg">Cancel</button>
                </form>
            </div><!--end modal-body-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog modal-sm-->
</div><!--end modal-fade-->

<div class="panel-footer">
    <div class="container">
        <p> This is going to be the footer for the site! </p>
        <p>© SOAP 2014</p>
    </div><!--end container-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script>
    //This is a jquery function to hide the personal information edit section until they click the Edit arrow//
    $(document).ready(function(){
        $('.glyphicon-chevron-up').click(function(){
            $('#personal').show(1000);
            $('.glyphicon-chevron-up').hide();
            $('.glyphicon-chevron-down').show();
        });
        $('.glyphicon-chevron-down').click(function(){
            $('#personal').hide(1000);
            $('.glyphicon-chevron-down').hide();
            $('.glyphicon-chevron-up').show();
        });
//This is a jquery function to hide the Edit Semester Name function until they click the Edit Name button//
        $('.editSemesterName').hide();
        $('.btnEditName').click(function(){
            $('.editSemesterName').toggle(200);
        });
    });
</script>

</body>
</html><?php }} ?>
