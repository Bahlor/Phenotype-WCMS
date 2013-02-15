<?php /* Smarty version 2.6.25, created on 2010-01-31 16:11:41
         compiled from C:/xampp/htdocs/srv_sf/_phenotype/application/templates/page_templates/0001.normal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pt_doctype', 'C:/xampp/htdocs/srv_sf/_phenotype/application/templates/page_templates/0001.normal.tpl', 1, false),array('modifier', 'escape', 'C:/xampp/htdocs/srv_sf/_phenotype/application/templates/page_templates/0001.normal.tpl', 6, false),)), $this); ?>
<?php echo $this->_plugins['function']['pt_doctype'][0][0]->pt_doctype(array('dtd' => "XHTML1.0-Transitional",'charset' => "ISO-8859-1"), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
    <title><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smarty_modifier_escape($_tmp)); ?>
</title>
</head>

<body>
<?php echo $this->_tpl_vars['pt_debug']; ?>

<?php echo $this->_tpl_vars['pt_block1']; ?>

</body>
</html>