<?php /* Smarty version Smarty-3.1.16, created on 2014-05-09 01:57:03
         compiled from "/home/soap/public_html/templates/semester.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1923572692535a8962735896-55600516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1916709db350c256d2b19245644959310ef42ca' => 
    array (
      0 => '/home/soap/public_html/templates/semester.tpl',
      1 => 1399614165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923572692535a8962735896-55600516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_535a896276cb54_55257490',
  'variables' => 
  array (
    'firstName' => 0,
    'categoryArray' => 0,
    'categories' => 0,
    'activityArray' => 0,
    'activities' => 0,
    'error' => 0,
    'retrieveArray' => 0,
    'retrieves' => 0,
    'semesterID' => 0,
    'goalArray' => 0,
    'goals' => 0,
    'stepArray' => 0,
    'steps' => 0,
    'experienceArray' => 0,
    'experiences' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a896276cb54_55257490')) {function content_535a896276cb54_55257490($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOAP</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-editable.css" rel="stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link href="css/notifIt.css" rel="stylesheet" type="text/css">
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
            <a href="student.php"><button type="button" class="btn btn-success">Main</button></a>
            <button type="submit" class="btn btn-success">Logout</button>
        </form><!--end  navbar-form navbar-right--->
    </div><!--end container--->
</div><!--end navbar navbar-inverse navbar-fixed top-->
<div class="container">
<h1>Choose Activities</h1>
    <div id="tabs">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
                <li><a href="#tabs-<?php echo $_smarty_tpl->tpl_vars['categories']->value['catID'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value['catName'];?>
</a></li>
            <?php } ?>
        </ul>
        <?php  $_smarty_tpl->tpl_vars['categories'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->key => $_smarty_tpl->tpl_vars['categories']->value) {
$_smarty_tpl->tpl_vars['categories']->_loop = true;
?>
            <div id="tabs-<?php echo $_smarty_tpl->tpl_vars['categories']->value['catID'];?>
">
                <?php  $_smarty_tpl->tpl_vars['activities'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activities']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activityArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activities']->key => $_smarty_tpl->tpl_vars['activities']->value) {
$_smarty_tpl->tpl_vars['activities']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['activities']->value['cat_OID']==$_smarty_tpl->tpl_vars['categories']->value['cat_OID']) {?>
                        <div id="act<?php echo $_smarty_tpl->tpl_vars['activities']->value['act_OID'];?>
" title="Drag Me!" class="activities dragMe"><?php echo $_smarty_tpl->tpl_vars['activities']->value['actName'];?>
</div>
                    <?php }?>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="well well-lg" id="dragHere"><h3>Drag Activity Here</h3></div>
    <div class="input-group" id="addOther">
        <div class="input-group-btn">
            <button type="submit" class="addActivity btn btn-default">Add Activity</button>
        </div>
        <input type="text" name="Other" class="form-control" placeholder="Other Activity">
    </div><br>
    <hr>
    <div class="container" id="myActivities">
        <h1>My Activities</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <h3><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
        <?php } else { ?>
            <div class="form-control">
                <input type="checkbox" disabled> = Check if you want the activity hidden from faculty members.
            </div>
            <?php  $_smarty_tpl->tpl_vars['retrieves'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['retrieves']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['retrieveArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['retrieves']->key => $_smarty_tpl->tpl_vars['retrieves']->value) {
$_smarty_tpl->tpl_vars['retrieves']->_loop = true;
?>
                <div id="dragAct<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
" class="activities">
                    <span class="glyphicon glyphicon-book" data-toggle="modal"
                          data-target="#des<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
" title="Add/Edit a Description"></span>
                    <span class="glyphicon glyphicon-eye-open" title="Show/Hide Description"></span>

                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['retrieves']->value['shown']=="0") {?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actName'];?>

                    <button type="button" data-toggle="modal" data-target="#delAct<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
"
                                                      class="close deleteMyActivity">&times;</button>
                </div><!--end activities-->
                <?php if ($_smarty_tpl->tpl_vars['retrieves']->value['reflection']!==null) {?>
                    <div class="hideReflection" id="hide<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
">
                        <button type="button" class="close removeDescription" title="Remove Description">&times;</button>
                        <p><strong>Description: </strong></p>
                        <p data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
" class="editReflection"><?php echo $_smarty_tpl->tpl_vars['retrieves']->value['reflection'];?>
</p>
                    </div><!--end Reflection-->
                <?php }?>
                                      <!-----------Modal to Add an Activity Description--------------->
                <div class="modal fade" id="des<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
">
                    <div class="modal-dialog">
                        <form action="semester.php?semester=<?php echo $_smarty_tpl->tpl_vars['semesterID']->value;?>
" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add/Edit Description Here</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">Add/Edit Description</span>
                                        <textarea name="actDescription" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary addDescription" data-dismiss="modal">Add Description</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </form>
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!---------- CODE TO ADD A MODEL FOR A "ARE U SURE?" CHOICE FOR DELETING ACTIVITIES------->
                <div class="modal fade" id="delAct<?php echo $_smarty_tpl->tpl_vars['retrieves']->value['actID'];?>
">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Are you sure you want to delete this activity? </h4>
                                <br>
                                <button type="button" class="btn btn-default delActivity" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div><!-- /.model-header -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php } ?>
        <?php }?>
    </div><!--end myActivities-->
    <hr>
    <form action="semester.php" method="post">
        <div class="container" id="majorActivities">
        <!--This is for the student's activities related to their major-->
            <div class="col-lg-6">
                <h3>Activities Related To Your Major</h3>
                <div class="input-group">
                    <span class="input-group-addon">Course Assistant:</span>
                    <input type="text" name="Course_Name" class="form-control" placeholder="Name Course">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Department Work Study:</span>
                    <input type="text" name="Department" class="form-control" placeholder="Department Area">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Internship:</span>
                    <input type="text" name="Internship" class="form-control" placeholder="Name Internship">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">Collaboratory:</span>
                    <input type="text" name="Internship" class="form-control" placeholder="Group Name">
                </div><br>
                <div class="input-group">
                    <input type="checkbox" name="Diplomat" class="checkBox" value="diplomat">Diplomat
                </div><!-- /input-group --><br/>
                <div class="input-group">
                    <input type="checkbox" name="Tutor" class="checkBox" value="tutor">Math Help Room tutor
                </div><!-- /input-group --><br/>
                <div class="input-group">
                    <input type="checkbox" name="Math_Solve" class="checkBox" value="math">Math Problem Solving Group
                </div><!-- /input-group --><br/>
            </div><!--end col-lg-6-->
            <div class="col-lg-6">
                <h3>Outside Activities</h3>
                    <div class="input-group">
                        <span class="input-group-addon">Local Church:</span>
                        <input type="text" name="Local_Church" class="form-control" placeholder="Name/Activity">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon">Tutor:</span>
                        <input type="text" name="Tutor" class="form-control" placeholder="Tutor">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon">Other:</span>
                        <input type="text" name="Other" class="form-control" placeholder="Other">
                    </div><br>
            </div><!--end col-lg-6-->
        </div><!--end majorActivities-->
        <button type="submit" class="btn btn-success">Submit</button>
    </form> <hr>
    <!--Goals container-->
    <div class="container" id="goalContainer">
        <h1>Goals</h1>
        <button type="button" data-toggle="modal" data-target="#addGoalModal" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Add Goal
        </button>
        <div class="list-group">
            <?php  $_smarty_tpl->tpl_vars['goals'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goals']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goalArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goals']->key => $_smarty_tpl->tpl_vars['goals']->value) {
$_smarty_tpl->tpl_vars['goals']->_loop = true;
?>
                <div id="goalIDS<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
" class="checkGoal">
                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['goals']->value['shown']=="0") {?>checked<?php }?>> Check if you want to hide from faculty
                </div>
                <h4 class="list-group-item list-group-item-heading text-left h4Goal" id="goal<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
">
                    <a href="#" class="updateGoal" data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
"><?php echo $_smarty_tpl->tpl_vars['goals']->value['goalName'];?>
</a>
                </h4>

                <!--These are the icons-->
                <span class="icons">
                    <span class="glyphicon glyphicon-remove closeGoal" data-toggle="modal"
                          data-target="#deleteGoalModal<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
" title="Remove this Goal"></span>
                    <span class="glyphicon glyphicon-plus-sign Add_Step" data-toggle="tooltip"
                          data-placement="right" title="Add a Step"></span>
                </span><!---end icons--->

                <div class="input-group addStep">
                    <div class="input-group-btn">
                        <button type="submit" class="stepButton btn btn-default">Add Step</button>
                    </div>
                    <input type="text" name="Step" class="form-control" placeholder="Add Step">
                </div>

                <button type="button" class="btn btn-default hideStep btn-sm">
                    <span class="glyphicon glyphicon-retweet"></span> Show/Hide Steps
                </button>

                <?php  $_smarty_tpl->tpl_vars['steps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['steps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stepArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['steps']->key => $_smarty_tpl->tpl_vars['steps']->value) {
$_smarty_tpl->tpl_vars['steps']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['goals']->value['goalID']==$_smarty_tpl->tpl_vars['steps']->value['goalID']) {?>
                        <div class="steps<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
 steps" id="steps<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
">
                            <p id="step<?php echo $_smarty_tpl->tpl_vars['steps']->value['stepID'];?>
" class="list-group-item list-group-item-text">
                                Step: <?php echo $_smarty_tpl->tpl_vars['steps']->value['stepName'];?>

                            </p>
                            <span id="stepIcon<?php echo $_smarty_tpl->tpl_vars['steps']->value['stepID'];?>
" class="glyphicon glyphicon-remove-sign closeStep" data-toggle="modal"
                                  data-target="#deleteStepsModal<?php echo $_smarty_tpl->tpl_vars['steps']->value['stepID'];?>
" title="Remove this Step"></span>
                        </div><!--end steps-->
                <!---------- CODE TO ADD A MODEL FOR A "ARE U SURE?" CHOICE FOR DELETING STEPS------->
                        <div class="modal fade" id="deleteStepsModal<?php echo $_smarty_tpl->tpl_vars['steps']->value['stepID'];?>
">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Are you sure you want to delete this step? </h4>
                                        <br>
                                        <button type="button" class="btn btn-default deleteStep" data-dismiss="modal">Yes</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div><!-- /.model-header -->
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    <?php }?>
                <?php } ?>
                <!---------- CODE TO ADD A MODEL FOR A "ARE U SURE?" CHOICE FOR DELETING GOALS------->
                <div class="modal fade" id="deleteGoalModal<?php echo $_smarty_tpl->tpl_vars['goals']->value['goalID'];?>
">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Are you sure you want to delete this goal? It will delete all steps as well!</h4>
                                <br>
                                <button type="button" class="btn btn-default deleteGoal" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div><!-- /.model-header -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php } ?>
        </div><!--end list-group-->
        <!-----------Modal to Add a Goal--------------->
        <div class="modal fade" id="addGoalModal">
            <div class="modal-dialog">
                <form action="semester.php?semester=<?php echo $_smarty_tpl->tpl_vars['semesterID']->value;?>
" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Goal Here</h4>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-addon">Add Goal</span>
                                <textarea name="Goal" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Goal</button>
                        </div>
                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <hr>

    <!--------------EXPERIENCE SECTION--------------
    ------------------------------------------------>
    <div class="container" id="experienceContainer">
        <h1>Experiences</h1>
        <button type="button" data-toggle="modal" data-target="#addExperienceModal" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Add Experience
        </button>

        <div class="list-group">
            <?php  $_smarty_tpl->tpl_vars['experiences'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['experiences']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['experienceArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['experiences']->key => $_smarty_tpl->tpl_vars['experiences']->value) {
$_smarty_tpl->tpl_vars['experiences']->_loop = true;
?>
                <div id="expeIDS<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
">
                    <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['experiences']->value['shown']=="0") {?>checked<?php }?>> Check if you want to hide from faculty
                </div>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading text-left h4Goal" id="experience<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
">
                        <a href="#" class="updateExp" data-name="Experience_Name" data-type="text"
                           data-pk="<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
"><?php echo $_smarty_tpl->tpl_vars['experiences']->value['expName'];?>
</a>
                    </h4>
                    <p class="list-group-item-text">
                        <a href="#" class="updateDescription" data-name="Description" data-type="textarea"
                           data-pk="<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
"><?php echo $_smarty_tpl->tpl_vars['experiences']->value['description'];?>
</a>
                    </p>
                    <!--These are the icons-->
                </div><!--end list-group-item-->
                <span class="icons">
                    <span class="glyphicon glyphicon-remove closeExperience" id="<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
" data-toggle="modal"
                          data-target="#deleteExperienceModal<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
" title="Remove this Experience"></span>
                </span><!---end icons--->
        <!---------- CODE TO ADD A MODEL FOR A "ARE U SURE?" CHOICE FOR DELETING STUFF------->
                <div class="modal fade" id="deleteExperienceModal<?php echo $_smarty_tpl->tpl_vars['experiences']->value['expID'];?>
">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Are you sure you want to delete this experience? </h4>
                                <br>
                                <button type="button" class="btn btn-default deleteExp" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div><!-- /.model-header -->
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            <?php } ?>
        </div><!--end list-group-->

        <!---------EXPERIENCE MODAL---------->
        <div class="modal fade" id="addExperienceModal">
            <div class="modal-dialog">
                <form action="semester.php?semester=<?php echo $_smarty_tpl->tpl_vars['semesterID']->value;?>
" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Experience Here</h4>
                        </div>
                        <div class="modal-body">
                            <div class="input-group">
                                <span class="input-group-addon">Experience Name</span>
                                <input type="text" name="Experience_Name" class="form-control" placeholder="Experience Name">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">Add Experience</span>
                                <textarea name="Experience" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Experience</button>
                        </div>
                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <div class="col-sm-3 blog-sidebar" id="semesterSidebar">
        <div class="list-group">
            <a href="#tabs" class="list-group-item overview">Choose Activities</a>
            <a href="#myActivities" class="list-group-item overview">My Activities</a>
            <a href="#majorActivities" class="list-group-item overview">Other Activities</a>
            <a href="#goalContainer" class="list-group-item overview">Goals</a>
            <a href="#experienceContainer" class="list-group-item overview">Experiences</a>
        </div>
        <a href="#top"><h1><span class="glyphicon glyphicon-chevron-up"></span></h1></a>
    </div><!--end col-sm-3 col-sm-offset-->
</div>
<div class="panel-footer">
    <div class="container">
        <p> This is going to be the footer for the site! </p>
        <p>© SOAP 2014</p>
    </div><!--end container-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- JavaScript code that changes things on the user interface side of the admin page-->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-editable.min.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/notifIt.js" type="text/javascript"> </script>
<script src="js/semester.js"></script>
</body>
</html><?php }} ?>
