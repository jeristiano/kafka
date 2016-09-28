<?php /* Smarty version 3.1.27, created on 2016-06-17 06:26:38
         compiled from "F:\121\p617smarty\smart\template\for.php" */ ?>
<?php
/*%%SmartyHeaderCode:120725763981e924c37_12485581%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46240cac2013b60a00a72acf881c41de9f3f16da' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\for.php',
      1 => 1466144712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120725763981e924c37_12485581',
  'variables' => 
  array (
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763981e992250_99996093',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763981e992250_99996093')) {
function content_5763981e992250_99996093 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '120725763981e924c37_12485581';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>pyhton</title>
    </head>
    <body>
        <ul>
            <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>  
            <li><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</li>
            <?php }} ?>
        </ul>
    </body>
</html><?php }
}
?>