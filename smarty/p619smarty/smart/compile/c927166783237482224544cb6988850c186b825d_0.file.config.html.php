<?php /* Smarty version 3.1.27, created on 2016-06-20 02:44:13
         compiled from "F:\121\p619smarty\smart\template\config.html" */ ?>
<?php
/*%%SmartyHeaderCode:192395767587d5bf0e0_66415702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c927166783237482224544cb6988850c186b825d' => 
    array (
      0 => 'F:\\121\\p619smarty\\smart\\template\\config.html',
      1 => 1466390552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192395767587d5bf0e0_66415702',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5767587d643e02_84311134',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5767587d643e02_84311134')) {
function content_5767587d643e02_84311134 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192395767587d5bf0e0_66415702';
Smarty_Internal_Extension_Config::configLoad($_smarty_tpl, 'foo.conf', null, 'local');?>
<html>
<title><?php echo $_smarty_tpl->getConfigVariable( 'pageTitle');?>
</title>
<body bgcolor="<?php echo $_smarty_tpl->getConfigVariable( 'bodyBgColor');?>
">
<table border="<?php echo $_smarty_tpl->getConfigVariable( 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->getConfigVariable( 'tableBgColor');?>
">
<tr bgcolor="<?php echo $_smarty_tpl->getConfigVariable( 'rowBgColor');?>
">
<td>First</td>
<td>Last</td>
<td>Address</td>
</tr>
</table>
</body>
</html><?php }
}
?>