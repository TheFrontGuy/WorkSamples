<?php
/**
 * Created by PhpStorm.
 * User: ct122_000
 * Date: 2/24/14
 * Time: 10:09 AM
 */

session_start();
require_once "../private_html/connect.php";

$error = $_GET['error'];
$smarty->assign('error', $error);


$pdo = null;
$smarty->display('error.tpl');