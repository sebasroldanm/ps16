<?php /* Smarty version Smarty-3.1.19, created on 2020-11-25 07:41:57
         compiled from "C:\laragon\www\ps16\admin692q9vvzn\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14898623125fbe51152da468-31163561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78ee02f94f65eaa3b3c71c4de98d4c54eae1e0e2' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\admin692q9vvzn\\themes\\default\\template\\content.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14898623125fbe51152da468-31163561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fbe51152ddfb7_63465980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fbe51152ddfb7_63465980')) {function content_5fbe51152ddfb7_63465980($_smarty_tpl) {?>
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
