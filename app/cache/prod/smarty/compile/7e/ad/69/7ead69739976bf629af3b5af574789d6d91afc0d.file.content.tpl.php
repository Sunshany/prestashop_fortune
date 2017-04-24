<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 18:05:24
         compiled from "C:\wamp64\www\Prestashop_Fortune\admin21738txcb\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54158fdcf6e275d48-75187776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ead69739976bf629af3b5af574789d6d91afc0d' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\admin21738txcb\\themes\\default\\template\\content.tpl',
      1 => 1493036361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54158fdcf6e275d48-75187776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdcf6e28c441_68902671',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdcf6e28c441_68902671')) {function content_58fdcf6e28c441_68902671($_smarty_tpl) {?>
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
