<?php /* Smarty version 3.1.27, created on 2016-06-17 06:13:19
         compiled from "F:\121\p617smarty\smart\template\hello.php" */ ?>
<?php
/*%%SmartyHeaderCode:19611576394ffc0c2a0_71392553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '954b499629caeb23230e11dc5d3ad364ff105e26' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\hello.php',
      1 => 1466143798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19611576394ffc0c2a0_71392553',
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576394ffd11e60_53191655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576394ffd11e60_53191655')) {
function content_576394ffd11e60_53191655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19611576394ffc0c2a0_71392553';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
       <?php if (isset($_smarty_tpl->tpl_vars['x'])) {$_smarty_tpl->tpl_vars['x'] = clone $_smarty_tpl->tpl_vars['x'];
$_smarty_tpl->tpl_vars['x']->value = 60; $_smarty_tpl->tpl_vars['x']->nocache = null; $_smarty_tpl->tpl_vars['x']->scope = 0;
} else $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(60, null, 0);?>
       <?php if ($_smarty_tpl->tpl_vars['x']->value == 50) {?>
       <b>不及格</b>
       <?php } elseif ($_smarty_tpl->tpl_vars['x']->value == 60) {?>
       <b>及格</b>
       <?php } else { ?>
       <b>我也不知道</b>
       <?php }?>
    </body>
</html><?php }
}
?>