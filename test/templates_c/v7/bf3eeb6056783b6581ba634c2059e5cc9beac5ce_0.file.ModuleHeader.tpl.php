<?php
/* Smarty version 4.5.4, created on 2025-02-20 11:36:08
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Settings\ITS4YouInstaller\ModuleHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b713a8424230_26753453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3eeb6056783b6581ba634c2059e5cc9beac5ce' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Settings\\ITS4YouInstaller\\ModuleHeader.tpl',
      1 => 1740051355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b713a8424230_26753453 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix"><div class="col-lg-4 col-md-4"><h4 title="<?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
" class="module-title pull-left text-uppercase"> <?php echo strtoupper(vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
 </h4></div><div class="col-lg-8 col-md-8"><div class="navbar-right"><ul class="nav navbar-nav"><li><?php if ($_smarty_tpl->tpl_vars['REQUIREMENTS']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRequirementsUrl();?>
"><div class="requirements-alert btn btn-<?php echo $_smarty_tpl->tpl_vars['REQUIREMENTS']->value->getButtonType();?>
"><?php echo vtranslate('LBL_SYSTEM_REQUIREMENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></a>&nbsp;<?php if (!($_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value)) {?><a href="index.php?module=ITS4YouInstaller&parent=Settings&view=Login"><div class="btn btn-default"><div class="fa fa-sign-in" aria-hidden="true"></div>&nbsp;<?php echo vtranslate('LBL_LOGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></a><?php } else { ?><button class="btn btn-default module-buttons" type="button" style="text-transform:none"><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</button>&nbsp;<button class="btn btn-danger" type="button" id="logoutInstaller"><span class="fa fa-power-off"></span>&nbsp;<?php echo vtranslate('LBL_LOGOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }
}?></li></ul></div></div></div></div><?php }
}
