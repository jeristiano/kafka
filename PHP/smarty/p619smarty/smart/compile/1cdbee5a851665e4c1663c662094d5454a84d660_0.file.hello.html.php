<?php /* Smarty version 3.1.27, created on 2016-06-17 05:53:22
         compiled from "F:\121\p617smarty\smart\template\hello.html" */ ?>
<?php
/*%%SmartyHeaderCode:1504457639052de6f01_96368200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cdbee5a851665e4c1663c662094d5454a84d660' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\hello.html',
      1 => 1466142790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504457639052de6f01_96368200',
  'variables' => 
  array (
    'x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576390534f9e02_43075280',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576390534f9e02_43075280')) {
function content_576390534f9e02_43075280 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1504457639052de6f01_96368200';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <!--我是HTML注释-->
        <?php if (isset($_smarty_tpl->tpl_vars['x'])) {$_smarty_tpl->tpl_vars['x'] = clone $_smarty_tpl->tpl_vars['x'];
$_smarty_tpl->tpl_vars['x']->value = 123; $_smarty_tpl->tpl_vars['x']->nocache = null; $_smarty_tpl->tpl_vars['x']->scope = 0;
} else $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(123, null, 0);?>
        <?php echo $_smarty_tpl->tpl_vars['x']->value;?>

    </body>
</html><?php }
}
?>