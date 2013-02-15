<?php /* Smarty version 2.6.25, created on 2012-06-15 05:45:57
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0004_0001_in.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url_for_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0004_0001_in.tpl', 3, false),array('function', 'title_of_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0004_0001_in.tpl', 3, false),)), $this); ?>
<ul>
<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
	<li<?php if ($this->_tpl_vars['p']['active']): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
" title="Gehe zu <?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
"><?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>