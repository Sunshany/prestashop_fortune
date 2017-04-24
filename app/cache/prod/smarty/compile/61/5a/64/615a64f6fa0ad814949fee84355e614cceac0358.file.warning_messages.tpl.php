<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 12:12:22
         compiled from "C:\wamp64\www\Prestashop_Fortune\admin21738txcb\themes\new-theme\template\components\layout\warning_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2578158fdcf865bb779-75442963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '615a64f6fa0ad814949fee84355e614cceac0358' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\admin21738txcb\\themes\\new-theme\\template\\components\\layout\\warning_messages.tpl',
      1 => 1493026001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2578158fdcf865bb779-75442963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdcf865f5a85_52403306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdcf865f5a85_52403306')) {function content_58fdcf865f5a85_52403306($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)>1) {?>
        <h4><?php echo smartyTranslate(array('s'=>'There are %d warnings:','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value))),$_smarty_tpl);?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
