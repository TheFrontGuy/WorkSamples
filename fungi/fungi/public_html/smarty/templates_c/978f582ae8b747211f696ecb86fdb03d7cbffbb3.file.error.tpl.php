<?php /* Smarty version Smarty-3.1.16, created on 2014-03-30 18:35:10
         compiled from "/home/soap/public_html/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9972678195333224a7e1e11-13406533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978f582ae8b747211f696ecb86fdb03d7cbffbb3' => 
    array (
      0 => '/home/soap/public_html/templates/error.tpl',
      1 => 1396218822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9972678195333224a7e1e11-13406533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5333224a813c22_29603311',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333224a813c22_29603311')) {function content_5333224a813c22_29603311($_smarty_tpl) {?><!DOCTYPE html>
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
    <div id="errorPage" class="container">
        <div class="jumbotron">
            <h1>SOAP Error Page</h1>
            <p>Error: <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            <p><a class="btn btn-primary btn-lg" role="button" href="logout.php">Logout</a></p>
        </div><!--end jumbotron--->
    </div><!--end container-->
</body>
</html><?php }} ?>
