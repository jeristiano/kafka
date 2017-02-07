<?php /* Smarty version 3.1.27, created on 2016-06-17 08:11:42
         compiled from "F:\121\p617smarty\smart\template\links.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:255775763b0bed88240_71229095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0739648580c3b2786129bbecb99fe724b620fc' => 
    array (
      0 => 'F:\\121\\p617smarty\\smart\\template\\links.tpl',
      1 => 1466150876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255775763b0bed88240_71229095',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763b0bedab4c3_32081761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763b0bedab4c3_32081761')) {
function content_5763b0bedab4c3_32081761 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '255775763b0bed88240_71229095';
if (isset($_smarty_tpl->tpl_vars['title'])) {$_smarty_tpl->tpl_vars['title'] = clone $_smarty_tpl->tpl_vars['title'];
$_smarty_tpl->tpl_vars['title']->value = 'Newest links'; $_smarty_tpl->tpl_vars['title']->nocache = null; $_smarty_tpl->tpl_vars['title']->scope = 0;
} else $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable('Newest links', null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['link_array'])) {$_smarty_tpl->tpl_vars['link_array'] = clone $_smarty_tpl->tpl_vars['link_array'];
$_smarty_tpl->tpl_vars['link_array']->value = array(1,2,3,4,5); $_smarty_tpl->tpl_vars['link_array']->nocache = null; $_smarty_tpl->tpl_vars['link_array']->scope = 0;
} else $_smarty_tpl->tpl_vars['link_array'] = new Smarty_Variable(array(1,2,3,4,5), null, 0);

}
}
?>