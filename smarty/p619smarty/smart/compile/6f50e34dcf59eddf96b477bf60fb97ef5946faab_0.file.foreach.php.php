<?php /* Smarty version 3.1.27, created on 2016-06-17 07:48:45
         compiled from "F:\121\p617smarty\smart\template\foreach.php" */ ?>
<?php
/*%%SmartyHeaderCode:322025763ab5d1194d1_33975371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f50e34dcf59eddf96b477bf60fb97ef5946faab' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\foreach.php',
      1 => 1466149722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322025763ab5d1194d1_33975371',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763ab5d1d4d07_15647375',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763ab5d1d4d07_15647375')) {
function content_5763ab5d1d4d07_15647375 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '322025763ab5d1194d1_33975371';
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ui</title>
    </head>
    <body>
        <?php if (isset($_smarty_tpl->tpl_vars['info'])) {$_smarty_tpl->tpl_vars['info'] = clone $_smarty_tpl->tpl_vars['info'];
$_smarty_tpl->tpl_vars['info']->value = array(); $_smarty_tpl->tpl_vars['info']->nocache = null; $_smarty_tpl->tpl_vars['info']->scope = 0;
} else $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable(array(), null, 0);?>
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration == $_smarty_tpl->tpl_vars['v']->total;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['v']->last) {?>
            <li>本次循环次数<?php echo $_smarty_tpl->tpl_vars['v']->total;?>
</li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
            没有纸
            <?php
}
?>
        </ul>
    </body>
</html><?php }
}
?>