<?php /* Smarty version Smarty-3.1.19, created on 2020-11-22 08:22:33
         compiled from "C:\laragon\www\ps16\admin946wcx6bu\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16991087845fba6619dccd48-25614727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f9614890aef1a2dc8be892d78fe9fa44d440ae4' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin946wcx6bu\\themes\\default\\template\\content.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16991087845fba6619dccd48-25614727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fba6619e06a21_45369882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fba6619e06a21_45369882')) {function content_5fba6619e06a21_45369882($_smarty_tpl) {?>
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
