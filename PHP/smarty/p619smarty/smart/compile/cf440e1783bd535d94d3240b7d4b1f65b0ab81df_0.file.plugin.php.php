<?php /* Smarty version 3.1.27, created on 2016-06-20 03:24:03
         compiled from "F:\121\p619smarty\smart\template\plugin.php" */ ?>
<?php
/*%%SmartyHeaderCode:30751576761d3dd4082_85620255%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf440e1783bd535d94d3240b7d4b1f65b0ab81df' => 
    array (
      0 => 'F:\\121\\p619smarty\\smart\\template\\plugin.php',
      1 => 1466393040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30751576761d3dd4082_85620255',
  'variables' => 
  array (
    'sex' => 0,
    'name' => 0,
    'data' => 0,
    'tr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576761d3e687a6_25154100',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576761d3e687a6_25154100')) {
function content_576761d3e687a6_25154100 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_radios')) require_once 'F:\\121\\p619smarty\\smart\\smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_table')) require_once 'F:\\121\\p619smarty\\smart\\smarty\\plugins\\function.html_table.php';

$_smarty_tpl->properties['nocache_hash'] = '30751576761d3dd4082_85620255';
?>

<?php echo smarty_function_html_radios(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['sex']->value,'output'=>$_smarty_tpl->tpl_vars['name']->value,'selected'=>1,'separator'=>'<br />'),$_smarty_tpl);?>



<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>"first,second,third,fourth,fiveth",'tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value),$_smarty_tpl);?>

<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>5,'table_attr'=>'border="0"'),$_smarty_tpl);?>


<?php }
}
?>