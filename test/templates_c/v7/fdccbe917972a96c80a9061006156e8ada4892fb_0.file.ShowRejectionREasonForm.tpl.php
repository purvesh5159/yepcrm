<?php
/* Smarty version 4.5.4, created on 2025-02-27 04:30:16
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Engineer\ShowRejectionREasonForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67bfea58a7b294_07355965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdccbe917972a96c80a9061006156e8ada4892fb' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Engineer\\ShowRejectionREasonForm.tpl',
      1 => 1724327142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bfea58a7b294_07355965 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modelContainer"><?php ob_start();
echo vtranslate('Enter Rejection Reason');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_prefixVariable1), 0, true);
?><div class="modal-content"><form id="AddRejectionReason" name="AddRejectionReason"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="action" value="ApproveOrReject"/><input type="hidden" name="apStatus" value="Rejected"/><div class="modal-body clearfix"><div class="col-lg-5"><label class="control-label pull-right marginTop5px"><?php echo vtranslate('Rejection Reason',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-6"><textarea type="text" name="rejectionReason" data-rule-required="true" class="inputElement"/></div></div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>
<?php }
}
