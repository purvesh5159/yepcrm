<?php
/* Smarty version 4.5.4, created on 2025-02-21 12:09:56
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Users\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b86d1463f3d4_21616295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3837b35a4b564e18f19eefed1d52adcc7180616d' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Users\\ListViewHeader.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b86d1463f3d4_21616295 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="listViewPageDiv" id="listViewContent"><div class="col-sm-12 col-xs-12 full-height"><input type='hidden' name='pwd_regex' value= <?php echo ZEND_json::encode($_smarty_tpl->tpl_vars['PWD_REGEX']->value);?>
 /><div id="listview-actions" class="listview-actions-container"><div class = "row"><div class="btn-group col-md-2"></div><div class='col-md-7' style="padding-top: 5px;text-align: center;"><div class="btn-group userFilter" style="text-align: center;"><button class="btn btn-default btn-primary" id="activeUsers" data-searchvalue="Active"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button class="btn btn-default" id="inactiveUsers" data-searchvalue="Inactive"><?php echo vtranslate('LBL_INACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><div class="col-md-3"><?php $_smarty_tpl->_assignInScope('RECORD_COUNT', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SHOWPAGEJUMP'=>true), 0, true);
?></div></div><div class="list-content">
<?php }
}
