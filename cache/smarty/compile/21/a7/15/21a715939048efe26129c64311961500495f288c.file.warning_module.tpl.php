<?php /* Smarty version Smarty-3.1.19, created on 2020-11-22 08:49:20
         compiled from "C:\laragon\www\ps16\admin946wcx6bu\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16946716535fba6c603a4360-96338379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a715939048efe26129c64311961500495f288c' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin946wcx6bu\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16946716535fba6c603a4360-96338379',
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
  'unifunc' => 'content_5fba6c603e08a2_71453781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fba6c603e08a2_71453781')) {function content_5fba6c603e08a2_71453781($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
