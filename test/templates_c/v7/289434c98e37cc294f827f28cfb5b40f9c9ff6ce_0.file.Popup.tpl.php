<?php
/* Smarty version 4.5.4, created on 2025-02-21 06:26:12
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Vtiger\Popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b81c846efe84_15405288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289434c98e37cc294f827f28cfb5b40f9c9ff6ce' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Vtiger\\Popup.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b81c846efe84_15405288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-dialog modal-lg"><div class="modal-content"><?php ob_start();
echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_prefixVariable1), 0, true);
?><div class="modal-body"><div id="popupPageContainer" class="contentsDiv col-sm-12"><input type="hidden" id="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" id="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" id="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" id="sourceRecord" <?php if ((isset($_smarty_tpl->tpl_vars['SOURCE_RECORD']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" <?php }?>/><input type="hidden" id="sourceField" <?php if ((isset($_smarty_tpl->tpl_vars['SOURCE_FIELD']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
" <?php }?>/><input type="hidden" id="url" <?php if ((isset($_smarty_tpl->tpl_vars['GETURL']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['GETURL']->value;?>
" <?php }?>/><input type="hidden" id="multi_select" <?php if ((isset($_smarty_tpl->tpl_vars['MULTI_SELECT']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
" <?php }?>/><input type="hidden" id="currencyId" <?php if ((isset($_smarty_tpl->tpl_vars['CURRENCY_ID']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" <?php }?>/><input type="hidden" id="relatedParentModule" <?php if ((isset($_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
" <?php }?>/><input type="hidden" id="relatedParentId" <?php if ((isset($_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
" <?php }?>/><input type="hidden" id="view" name="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"/><input type="hidden" id="relationId" <?php if ((isset($_smarty_tpl->tpl_vars['RELATION_ID']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
" <?php }?>/><input type="hidden" id="selectedIds" name="selectedIds"><?php if (!empty($_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value)) {?><input type="hidden" id="popUpClassName" value="<?php echo $_smarty_tpl->tpl_vars['POPUP_CLASS_NAME']->value;?>
"/><?php }?><div id="popupContents" class=""><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'PopupContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div></div>
<?php }
}
