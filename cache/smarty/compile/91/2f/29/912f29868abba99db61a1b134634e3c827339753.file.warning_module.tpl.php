<?php /* Smarty version Smarty-3.1.19, created on 2020-11-24 06:47:28
         compiled from "C:\laragon\www\ps16\admin3265muel8\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5195908165fbcf2d0957774-97057675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912f29868abba99db61a1b134634e3c827339753' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin3265muel8\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5195908165fbcf2d0957774-97057675',
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
  'unifunc' => 'content_5fbcf2d0987845_75021558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbcf2d0987845_75021558')) {function content_5fbcf2d0987845_75021558($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
