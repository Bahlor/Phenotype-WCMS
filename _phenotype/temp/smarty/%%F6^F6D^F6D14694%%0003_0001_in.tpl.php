<?php /* Smarty version 2.6.25, created on 2012-09-24 15:12:14
         compiled from /var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/include_templates/0003_0001_in.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/include_templates/0003_0001_in.tpl', 1, false),array('function', 'url_for_page', '/var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/include_templates/0003_0001_in.tpl', 3, false),array('function', 'title_of_page', '/var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/include_templates/0003_0001_in.tpl', 3, false),)), $this); ?>
<?php if (count($this->_tpl_vars['tree']) != 0 && $this->_tpl_vars['tree']): ?>
<?php echo $this->_config[0]['vars']['breadcrumb']; ?>
: <?php $_from = $this->_tpl_vars['tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['breadcrumb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['breadcrumb']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['p']):
        $this->_foreach['breadcrumb']['iteration']++;
?>
<a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['p'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
" title="Go to <?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
"><?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
</a><?php if (! ($this->_foreach['breadcrumb']['iteration'] == $this->_foreach['breadcrumb']['total'])): ?> &raquo; <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>