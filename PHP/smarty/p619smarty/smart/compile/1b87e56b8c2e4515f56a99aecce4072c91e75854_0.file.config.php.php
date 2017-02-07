<?php /* Smarty version 3.1.27, created on 2016-06-20 02:42:36
         compiled from "F:\121\p619smarty\smart\template\config.php" */ ?>
<?php
/*%%SmartyHeaderCode:66305767581cc268a8_77700402%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b87e56b8c2e4515f56a99aecce4072c91e75854' => 
    array (
      0 => 'F:\\121\\p619smarty\\smart\\template\\config.php',
      1 => 1466390552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66305767581cc268a8_77700402',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5767581cca38c8_12341578',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5767581cca38c8_12341578')) {
function content_5767581cca38c8_12341578 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66305767581cc268a8_77700402';
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