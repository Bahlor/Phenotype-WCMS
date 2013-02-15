<?php /* Smarty version 2.6.25, created on 2012-06-15 05:45:58
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0001_0001_in.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url_for_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0001_0001_in.tpl', 2, false),array('function', 'title_of_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0001_0001_in.tpl', 2, false),array('modifier', 'count', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0001_0001_in.tpl', 3, false),array('modifier', 'replace', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/include_templates/0001_0001_in.tpl', 6, false),)), $this); ?>
<ul><?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p']):
?>
	<li<?php if ($this->_tpl_vars['p']['active']): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
" title="Gehe zu <?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
"><?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['p']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
</a>
	<?php if (count($this->_tpl_vars['p']['subs']) != 0): ?>
	<ul>
	<?php $_from = $this->_tpl_vars['p']['subs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['subs'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['subs']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['s']):
        $this->_foreach['subs']['iteration']++;
?>
		<li class="<?php if ($this->_tpl_vars['s']['active']): ?>active<?php endif; ?><?php if (($this->_foreach['subs']['iteration'] == $this->_foreach['subs']['total'])): ?> last<?php endif; ?>"><a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['s']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
" title="Gehe zu <?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['s']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this);?>
"><?php echo ((is_array($_tmp=$this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => $this->_tpl_vars['s']['id'],'lng_id' => $this->_tpl_vars['lng_id']), $this))) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', "&nbsp;") : smarty_modifier_replace($_tmp, ' ', "&nbsp;"));?>
</a></li>	
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php endif; ?>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>