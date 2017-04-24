<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 18:05:26
         compiled from "C:\wamp64\www\Prestashop_Fortune\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2248558fdcf6f434c95-52595135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3b354839e9d6d37eb2ff19314069c16707b956b' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1493036404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2248558fdcf6f434c95-52595135',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdcf6f441c66_64673646',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdcf6f441c66_64673646')) {function content_58fdcf6f441c66_64673646($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
