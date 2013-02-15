<?php /* Smarty version 2.6.25, created on 2012-06-15 05:44:29
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0008_0001_cm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0008_0001_cm.tpl', 5, false),)), $this); ?>
<div class="gallery grid_8">
<?php if ($this->_tpl_vars['headline']): ?><h4><?php echo $this->_tpl_vars['gal']['name']; ?>
</h4><?php endif; ?>
<?php if ($this->_tpl_vars['desc']): ?><p><?php echo $this->_tpl_vars['gal']['desc']; ?>
</p><?php endif; ?>
<div class="images">
<?php if (count($this->_tpl_vars['gal']['img']) != 0 && $this->_tpl_vars['gal']['img']): ?>
<?php $_from = $this->_tpl_vars['gal']['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<a href="<?php echo $this->_tpl_vars['i']['6']; ?>
" class="lightbox" rel="gallery<?php echo $this->_tpl_vars['gal']['id']; ?>
" title="<?php echo $this->_tpl_vars['i']['0']; ?>
"><img src="<?php echo $this->_tpl_vars['i']['2']; ?>
" width="120" /></a>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</div>
</div>