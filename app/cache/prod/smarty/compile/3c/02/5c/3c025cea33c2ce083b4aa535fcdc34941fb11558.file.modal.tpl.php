<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 12:11:31
         compiled from "C:\wamp64\www\Prestashop_Fortune\admin21738txcb\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2844158fdcf5356f0c3-10696779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c025cea33c2ce083b4aa535fcdc34941fb11558' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\admin21738txcb\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1493026000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2844158fdcf5356f0c3-10696779',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdcf53580893_20763311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdcf53580893_20763311')) {function content_58fdcf53580893_20763311($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
