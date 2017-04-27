<?php /* Smarty version Smarty-3.1.19, created on 2017-04-27 12:52:31
         compiled from "C:\wamp64\www\Prestashop_Fortune\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1635058fdcf6f3113f5-28268682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '548d6b788ad972f577b1bd13ed91de96e967747a' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\modules\\welcome\\views\\navbar.tpl',
      1 => 1493290294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635058fdcf6f3113f5-28268682',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdcf6f32bd78_69536559',
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdcf6f32bd78_69536559')) {function content_58fdcf6f32bd78_69536559($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
