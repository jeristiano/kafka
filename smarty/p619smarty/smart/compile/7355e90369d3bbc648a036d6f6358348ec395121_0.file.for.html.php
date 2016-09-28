<?php /* Smarty version 3.1.27, created on 2016-06-17 06:26:02
         compiled from "F:\121\p617smarty\smart\template\for.html" */ ?>
<?php
/*%%SmartyHeaderCode:31051576397fa1d16d5_51983164%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7355e90369d3bbc648a036d6f6358348ec395121' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\for.html',
      1 => 1466144712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31051576397fa1d16d5_51983164',
  'variables' => 
  array (
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576397fa24a865_18886205',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576397fa24a865_18886205')) {
function content_576397fa24a865_18886205 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31051576397fa1d16d5_51983164';
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