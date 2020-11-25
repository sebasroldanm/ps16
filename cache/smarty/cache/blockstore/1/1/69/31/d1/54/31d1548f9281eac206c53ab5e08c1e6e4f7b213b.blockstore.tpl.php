<?php /*%%SmartyHeaderCode:7780823025fba70a3eecdd7-94506007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d1548f9281eac206c53ab5e08c1e6e4f7b213b' => 
    array (
      0 => 'C:\\laragon\\www\\ps16\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7780823025fba70a3eecdd7-94506007',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fba70a4202d05_14479402',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fba70a4202d05_14479402')) {function content_5fba70a4202d05_14479402($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://ps16.test/index.php?controller=stores" title="Nuestras tiendas">
			Nuestras tiendas
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://ps16.test/index.php?controller=stores" title="Nuestras tiendas">
				<img class="img-responsive" src="http://ps16.test/modules/blockstore/store.jpg" alt="Nuestras tiendas" />
			</a>
		</p>
				<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://ps16.test/index.php?controller=stores" 
			title="Nuestras tiendas">
				<span>Descubra nuestras tiendas<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
