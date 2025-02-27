<?php
/* Smarty version 4.5.4, created on 2025-02-26 05:10:22
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Settings\Profiles\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67bea23e44c876_10101700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8266ba836ffec034613d82a1c02b12cf88c7ad' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Settings\\Profiles\\EditView.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bea23e44c876_10101700 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="editViewPageDiv">
	<div class="col-sm-12 col-xs-12 main-scroll">
		<form class="form-horizontal" id="EditView" name="EditProfile" method="post" action="index.php" enctype="multipart/form-data">
			<div class="editViewHeader">
				<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId()) {?>
					<h4>
						<?php echo vtranslate('LBL_EDIT_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</h4>
				<?php } else { ?>
					<h4>
						<?php echo vtranslate('LBL_CREATE_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</h4>
				<?php }?>
			</div>
			<hr>
			<div class="editViewBody">
				<div class="editViewContents">
					<div id="submitParams">
						<input type="hidden" name="module" value="Profiles" />
						<input type="hidden" name="action" value="Save" />
						<input type="hidden" name="parent" value="Settings" />
						<?php $_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId());?>
						<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
						<input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
" />
						<input type="hidden" name="viewall" value="0" />
						<input type="hidden" name="editall" value="0" />
					</div>

					<div name='editContent'>
						<div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"> 
								<label>
									<strong><?php echo vtranslate('LBL_PROFILE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;<span class="redColor">*</span>:&nbsp;
								</label></div>
							<div class="fieldValue col-lg-6 col-md-6 col-sm-6" > 
								<input type="text" class="inputElement" name="profilename" id="profilename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
" data-rule-required="true" />
							</div>
						</div>

						<div class="row"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"> 
								<label>
									<strong><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;:&nbsp;</strong>
								</label></div>
							<div class="fieldValue col-lg-6 col-md-6 col-sm-6">
								<textarea name="description" class="inputElement" id="description" style="height:50px; resize: vertical;padding:5px 8px;"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</textarea>
							</div>
						</div>
						<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'EditViewContents.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					</div>
				</div>
			</div>
			<div class='modal-overlay-footer clearfix'>
				<div class="row clearfix">
					<div class=' textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
						<button type='submit' class='btn btn-success saveButton' ><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;
						<a class='cancelLink' data-dismiss="modal" href="javascript:history.back()" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php }
}
