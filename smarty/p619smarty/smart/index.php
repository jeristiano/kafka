
<?php
include './smarty/Autoloader.php';
Smarty_Autoloader::registerBC();
$smarty = new SmartyBC();
$smarty->template_dir = './template';
$smarty->compile_dir = './compile';
$smarty->cache_dir = './cache';
$smarty->assign('sex', array(1,2,3,4));
$smarty->assign('name', array('男','女','保密','未知'));


$smarty->assign( 'data', array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16) );
$smarty->assign( 'tr', array('bgcolor="yellow"','bgcolor="blue"') );

//$smarty->display('config.html');
$smarty->display('plugin.php');





