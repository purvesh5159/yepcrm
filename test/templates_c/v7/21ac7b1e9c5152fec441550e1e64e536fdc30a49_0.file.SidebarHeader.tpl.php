<?php
/* Smarty version 4.5.4, created on 2025-02-20 11:36:08
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Settings\ITS4YouInstaller\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b713a8319d48_37180364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ac7b1e9c5152fec441550e1e64e536fdc30a49' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Settings\\ITS4YouInstaller\\partials\\SidebarHeader.tpl',
      1 => 1740051355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_67b713a8319d48_37180364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', array('MARKETING'=>'fa-users','SALES'=>'fa-dot-circle-o','SUPPORT'=>'fa-life-ring','INVENTORY'=>'vicon-inventory','PROJECT'=>'fa-briefcase','TOOLS'=>'fa-wrench'));?>

<div class="col-sm-12 col-xs-12 app-indicator-icon-container extensionstore app-MARKETING">
    <div class="row" title="<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:$QUALIFIED_MODULE');?>
">
        <span class="app-indicator-icon cursorPointer fa fa-shopping-cart"></span>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
