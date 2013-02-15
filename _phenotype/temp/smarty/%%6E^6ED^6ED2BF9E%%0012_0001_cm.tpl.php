<?php /* Smarty version 2.6.25, created on 2012-06-15 05:43:52
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0012_0001_cm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0012_0001_cm.tpl', 2, false),array('function', 'title_of_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0012_0001_cm.tpl', 4, false),)), $this); ?>
<div class="grid_8 no-padding">
<?php if (count($this->_tpl_vars['pages']) != 0 && $this->_tpl_vars['pages']): ?>
<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['output'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['output']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['p']):
        $this->_foreach['output']['iteration']++;
?>
<div class="grid_8"><h3 class="slide_btn<?php if ($this->_tpl_vars['open'] == 1 && ($this->_foreach['output']['iteration'] <= 1)): ?> active<?php endif; ?>"<?php if ($this->_tpl_vars['accordion'] == 1): ?> data-link="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>><?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
</h3></div>
<div class="slide_content grid_8 no-padding<?php if ($this->_tpl_vars['open'] == 1 && ($this->_foreach['output']['iteration'] <= 1)): ?> active<?php endif; ?>"<?php if ($this->_tpl_vars['accordion'] == 1): ?> data-link="<?php echo $this->_tpl_vars['id']; ?>
"<?php endif; ?>>
<?php $_from = $this->_tpl_vars['p']['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['c']):
?>
<?php echo $this->_tpl_vars['c']; ?>

<?php endforeach; endif; unset($_from); ?>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</div>