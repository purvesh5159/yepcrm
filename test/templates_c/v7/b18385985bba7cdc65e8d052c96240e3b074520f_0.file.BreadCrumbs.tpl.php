<?php
/* Smarty version 4.5.4, created on 2025-02-21 08:07:04
  from 'D:\wamp\www\yepcrm\layouts\v7\modules\Vtiger\BreadCrumbs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b83428ec53f8_69657389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b18385985bba7cdc65e8d052c96240e3b074520f' => 
    array (
      0 => 'D:\\wamp\\www\\yepcrm\\layouts\\v7\\modules\\Vtiger\\BreadCrumbs.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b83428ec53f8_69657389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="<?php echo (isset($_smarty_tpl->tpl_vars['BREADCRUMB_ID']->value)) ? $_smarty_tpl->tpl_vars['BREADCRUMB_ID']->value : '';?>
" class="breadcrumb">
	<ul class="crumbs">
		<?php $_smarty_tpl->_assignInScope('ZINDEX', 9);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value, 'STEPTEXT', false, 'CRUMBID', 'breadcrumbLabels', array (
  'index' => true,
  'first' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['STEPTEXT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CRUMBID']->value => $_smarty_tpl->tpl_vars['STEPTEXT']->value) {
$_smarty_tpl->tpl_vars['STEPTEXT']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['total'];
?>
			<?php $_smarty_tpl->_assignInScope('INDEX', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['index'] : null));?>
			<?php $_smarty_tpl->_assignInScope('INDEX', $_smarty_tpl->tpl_vars['INDEX']->value+1);?>
			<li class="step <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['first'] : null)) {?> first <?php if ((isset($_smarty_tpl->tpl_vars['FIRSTBREADCRUMB']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['FIRSTBREADCRUMB']->value;?>
 <?php }?> <?php } else { ?> <?php if ((isset($_smarty_tpl->tpl_vars['ADDTIONALCLASS']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['ADDTIONALCLASS']->value;?>
 <?php }
}?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumbLabels']->value['last'] : null)) {?> last <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['ACTIVESTEP']->value)) && $_smarty_tpl->tpl_vars['ACTIVESTEP']->value == $_smarty_tpl->tpl_vars['INDEX']->value) {?>active<?php }?>"
				id="<?php echo $_smarty_tpl->tpl_vars['CRUMBID']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" style="z-index:<?php echo $_smarty_tpl->tpl_vars['ZINDEX']->value;?>
">
				<a href="#">
					<span class="stepNum"><?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
</span>
					<span class="stepText" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
				</a>
			</li>
			<?php $_smarty_tpl->_assignInScope('ZINDEX', $_smarty_tpl->tpl_vars['ZINDEX']->value-1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div><?php }
}
