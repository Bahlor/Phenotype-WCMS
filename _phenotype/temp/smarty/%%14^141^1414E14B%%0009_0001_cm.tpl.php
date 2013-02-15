<?php /* Smarty version 2.6.25, created on 2012-06-15 03:44:11
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0009_0001_cm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/component_templates/0009_0001_cm.tpl', 1, false),)), $this); ?>
<div class="grid_8"><?php echo $this->_tpl_vars['table']; ?>
</div><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "#time_format#") : smarty_modifier_date_format($_tmp, "#time_format#")); ?>