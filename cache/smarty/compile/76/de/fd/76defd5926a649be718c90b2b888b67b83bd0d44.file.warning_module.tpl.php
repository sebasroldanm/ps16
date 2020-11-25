<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 07:42:18
         compiled from "C:\laragon\www\ps16\admin692q9vvzn\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11951385825fbe512a215af5-25006495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76defd5926a649be718c90b2b888b67b83bd0d44' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin692q9vvzn\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11951385825fbe512a215af5-25006495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe512a219151_53498024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe512a219151_53498024')) {function content_5fbe512a219151_53498024($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
