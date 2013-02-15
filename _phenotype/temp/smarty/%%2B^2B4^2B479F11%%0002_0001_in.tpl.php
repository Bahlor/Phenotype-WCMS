<?php /* Smarty version 2.6.25, created on 2012-09-24 15:12:14
         compiled from /var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/include_templates/0002_0001_in.tpl */ ?>
<?php $_from = $this->_tpl_vars['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
<img src="<?php echo $this->_tpl_vars['i']['6']; ?>
" width="940" alt="" />
<?php endforeach; endif; unset($_from); ?>