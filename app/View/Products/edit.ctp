<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre_prod');
		echo $this->Form->input('talla');
		echo $this->Form->input('stock');
		echo $this->Form->input('v_unitario');
		echo $this->Form->input('iva');
		echo $this->Form->input('id_almacen');
		echo $this->Form->input('create_by');
		echo $this->Form->input('create_at');
		echo $this->Form->input('update_by');
		echo $this->Form->input('update_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
