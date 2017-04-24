<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 12:27:36
         compiled from "C:\wamp64\www\Prestashop_Fortune\admin21738txcb\themes\new-theme\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1898858fdd318b0f130-53231818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f462d3c683a913925e9115667b9fa54359d3285e' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_Fortune\\admin21738txcb\\themes\\new-theme\\template\\helpers\\kpi\\row.tpl',
      1 => 1493026001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1898858fdd318b0f130-53231818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdd318b4bcd6_58114073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdd318b4bcd6_58114073')) {function content_58fdd318b4bcd6_58114073($_smarty_tpl) {?>
<div class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="kpi-container">
        <div class="row">
          <?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
              </div>
              <div class="row">
            <?php }?>
            <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
