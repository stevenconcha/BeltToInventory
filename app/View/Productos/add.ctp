<div class="productos form">
<?php echo $this->Form->create('Producto'); ?>
	<fieldset>
		<legend><?php echo __('Add Producto'); ?></legend>
	<?php
		echo $this->Form->input('id_producto');
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

		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
	</ul>
</div>
