<?php /* Smarty version 2.6.25, created on 2012-09-24 16:35:19
         compiled from pageframe_standard.tpl */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30" class="whitespace">&nbsp;</td>
    <td width="270" class="sidebar" valign="top">
	<?php echo $this->_tpl_vars['left']; ?>

	</td>
    <td width="100%" id="main-content-frame" valign="top">
	<?php if ($this->_tpl_vars['content'] == ''): ?>&nbsp;<?php else: ?><?php echo $this->_tpl_vars['content']; ?>
<?php endif; ?>
	</td>
	<td width="30" class="whitespace">&nbsp;</td>
  </tr>
</table>
