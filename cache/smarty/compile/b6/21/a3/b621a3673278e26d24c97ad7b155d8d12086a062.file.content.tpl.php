<?php /* Smarty version Smarty-3.1.19, created on 2020-11-24 06:46:53
         compiled from "C:\laragon\www\ps16\admin3265muel8\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14484325255fbcf2adf2c869-35823330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b621a3673278e26d24c97ad7b155d8d12086a062' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin3265muel8\\themes\\default\\template\\content.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14484325255fbcf2adf2c869-35823330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbcf2ae014f26_71858224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbcf2ae014f26_71858224')) {function content_5fbcf2ae014f26_71858224($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
