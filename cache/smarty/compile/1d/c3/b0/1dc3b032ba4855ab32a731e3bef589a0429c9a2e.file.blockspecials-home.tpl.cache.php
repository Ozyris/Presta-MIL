<?php /* Smarty version Smarty-3.1.19, created on 2018-08-30 11:20:33
         compiled from "/home/d/d915435c/d915435c.beget.tech/public_html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10220816665b87a8d10bef33-05978414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc3b032ba4855ab32a731e3bef589a0429c9a2e' => 
    array (
      0 => '/home/d/d915435c/d915435c.beget.tech/public_html/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1535617229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10220816665b87a8d10bef33-05978414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b87a8d10cbfb9_29512119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b87a8d10cbfb9_29512119')) {function content_5b87a8d10cbfb9_29512119($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
