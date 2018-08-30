<?php /*%%SmartyHeaderCode:17434672505b87a8d0698945-44330352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e47f6d91f2788af367c552978ea27274a9629622' => 
    array (
      0 => '/home/d/d915435c/d915435c.beget.tech/public_html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1535617229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17434672505b87a8d0698945-44330352',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b87a8d06b5e67_90761564',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b87a8d06b5e67_90761564')) {function content_5b87a8d06b5e67_90761564($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//d915435c.beget.tech/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
