<?php
/* Smarty version 4.5.4, created on 2025-02-20 11:38:09
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Settings\ITS4YouInstaller\ChangeLog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b71421b83ff4_81507160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ce9df0c6e4de37539d72e0fac3be5a0bd86497' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Settings\\ITS4YouInstaller\\ChangeLog.tpl',
      1 => 1740051355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b71421b83ff4_81507160 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-lg changeLog"><div class='modal-content'><div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo vtranslate('LBL_CHANGELOG_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div></div><div class="modal-body" id="changeLog"><h4><b><?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->getExtensionLabel();?>
&nbsp;<?php if ('Upgrade' == $_smarty_tpl->tpl_vars['MODULE_ACTION']->value) {
echo $_smarty_tpl->tpl_vars['EXTENSION']->value->getVersion();?>
&nbsp;<?php echo vtranslate('LBL_UPDATE_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->getPackageVersion();
} else {
echo vtranslate('LBL_INSTALL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->getPackageVersion();
}?></b></h4><br><?php if (empty($_smarty_tpl->tpl_vars['MODULE_CHANGES']->value)) {?><div class="alert alert-warning"><?php echo vtranslate('LBL_MISSING_CHANGELOG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_CHANGES']->value, 'MODULE_CHANGE');
$_smarty_tpl->tpl_vars['MODULE_CHANGE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_CHANGE']->value) {
$_smarty_tpl->tpl_vars['MODULE_CHANGE']->do_else = false;
?><div><h4><?php echo $_smarty_tpl->tpl_vars['MODULE_CHANGE']->value['version'];?>
</h4><hr><div style="white-space: pre-line;"><?php echo decode_html($_smarty_tpl->tpl_vars['MODULE_CHANGE']->value['description']);?>
</div><br></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div class="modal-footer"><span class="extension_container"><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isVtigerCompatible()) {?><input type="hidden" name="extensionName" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('name');?>
"/><input type="hidden" name="extensionUrl" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('downloadURL');?>
"/><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('id');?>
"/><input type="hidden" name="extensionType" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION_TYPE']->value;?>
"/><input type="hidden" name="moduleMode" value="oneClickInstall"/><?php if (!$_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists()) {?><input type="hidden" name="moduleAction" value="Install"/><button class="oneClickInstall btn btn-primary <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php } elseif ($_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradable() || $_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradableMulti()) {?><input type="hidden" name="moduleAction" value="Upgrade"/><button class="oneClickInstall isUpdateBtn btn btn-success margin0px <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }
}?></span></div></div></div><?php }
}
