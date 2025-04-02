<?php
/* Smarty version 4.5.4, created on 2025-04-01 06:34:13
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Calendar\ListViewRecordActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67eb88e58f8982_62594555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b80bae9038f85dbc626031792d2442bd8aab6308' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Calendar\\ListViewRecordActions.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eb88e58f8982_62594555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="table-actions calendar-table-actions"><?php if (!$_smarty_tpl->tpl_vars['SEARCH_MODE_RESULTS']->value) {?><span class="input" ><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"/></span><?php }
if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('starred') == vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value)) {
$_smarty_tpl->_assignInScope('STARRED', true);
} else {
$_smarty_tpl->_assignInScope('STARRED', false);
}
if ($_smarty_tpl->tpl_vars['QUICK_PREVIEW_ENABLED']->value == 'true') {?><span><a class="quickView fa fa-eye icon action" title="<?php echo vtranslate('LBL_QUICK_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></a></span><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()) {?><span><a class="markStar fa icon action <?php if ($_smarty_tpl->tpl_vars['STARRED']->value) {?> fa-star active <?php } else { ?> fa-star-o<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['STARRED']->value) {?> <?php echo vtranslate('LBL_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php } else { ?> <?php echo vtranslate('LBL_NOT_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);
}?>"></a></span><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('EDIT_VIEW_URL', $_prefixVariable1);
if ((isset($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value)) && $_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value && $_smarty_tpl->tpl_vars['EDIT_VIEW_URL']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus') != vtranslate('Held',$_smarty_tpl->tpl_vars['MODULE']->value) && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus') != vtranslate('Completed',$_smarty_tpl->tpl_vars['MODULE']->value)) {?><span class="fa fa-check icon action markAsHeld" title="<?php echo vtranslate('LBL_MARK_AS_HELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="Calendar_Calendar_Js.markAsHeld('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
');"></span><?php }
if ((isset($_smarty_tpl->tpl_vars['IS_CREATE_PERMITTED']->value)) && $_smarty_tpl->tpl_vars['IS_CREATE_PERMITTED']->value && $_smarty_tpl->tpl_vars['EDIT_VIEW_URL']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('taskstatus') == vtranslate('Held',$_smarty_tpl->tpl_vars['MODULE']->value)) {?><span class="fa fa-flag icon action holdFollowupOn" title="<?php echo vtranslate('LBL_HOLD_FOLLOWUP_ON',"Events");?>
" onclick="Calendar_Calendar_Js.holdFollowUp('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
');"></span><?php }?><span class="more dropdown action"><span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v icon"></i></span><ul class="dropdown-menu"><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getFullDetailViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"><?php echo vtranslate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ((isset($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value)) && $_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value) {
if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['edit']) {?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" name="editlink"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['RECORD_ACTIONS']->value['delete']) {?><li><a data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" class="deleteRecordButton"><?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php }
}?></ul></span><div class="btn-group inline-save hide"><button class="button btn-success btn-small save" name="save"><i class="fa fa-check"></i></button><button class="button btn-danger btn-small cancel" name="Cancel"><i class="fa fa-close"></i></button></div></div><?php }
}
