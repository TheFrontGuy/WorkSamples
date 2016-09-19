<?php /* Smarty version Smarty-3.1.16, created on 2014-03-19 01:32:48
         compiled from "C:\xampp\htdocs\soap\public_html\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145435328cc26db5068-07237373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a132d045d7d8b07d89ffa7f01a33d45e01a88d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\soap\\public_html\\templates\\error.tpl',
      1 => 1395189164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145435328cc26db5068-07237373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5328cc26e22f16_40953299',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5328cc26e22f16_40953299')) {function content_5328cc26e22f16_40953299($_smarty_tpl) {?><!DOCTYPE html>
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
