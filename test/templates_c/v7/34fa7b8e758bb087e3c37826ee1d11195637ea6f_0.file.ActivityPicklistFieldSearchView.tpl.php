<?php
/* Smarty version 4.5.4, created on 2025-04-01 06:31:21
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Calendar\uitypes\ActivityPicklistFieldSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67eb8839222c79_98673492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34fa7b8e758bb087e3c37826ee1d11195637ea6f' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Calendar\\uitypes\\ActivityPicklistFieldSearchView.tpl',
      1 => 1743139817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eb8839222c79_98673492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues']);
$_smarty_tpl->_assignInScope('FIELD_INFO', Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value)));
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));?><div class="select2_search_div"><input type="text" class="listSearchContributor inputElement select2_input_element"/><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" multiple data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' style="display:none"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_LABEL', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><option value="Task" <?php if (in_array("Task",$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected<?php }?>><?php echo vtranslate('LBL_TODOS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div>

<?php }
}
