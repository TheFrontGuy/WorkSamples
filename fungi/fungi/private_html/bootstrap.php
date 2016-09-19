<?php
	#
	# Define Path Constants

	require_once "../private_html/connect.php";
	
	
	define('SMARTY_ROOT', WEB_PATH . 'smarty/');
	define('SMARTY_TEMPLATES', WEB_PATH . 'templates/');
	define('SMARTY', SMARTY_ROOT . 'libs/smarty.class.php');
	require_once SMARTY;
	$smarty = new Smarty();
	$smarty -> setTemplateDir(SMARTY_TEMPLATES);
	# templates_c is the directory where Smarty stores the
	# “compiled” templates.
	$smarty -> setTemplateDir(SMARTY_TEMPLATES);
	$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c');
	$smarty -> setCacheDir(SMARTY_ROOT . 'cache');
	$smarty -> setConfigDir(SMARTY_ROOT . 'configs');
	
?>