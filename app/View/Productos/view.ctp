<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id Producto'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id_producto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Prod'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre_prod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('V Unitario'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['v_unitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iva'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['iva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Almacen'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id_almacen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create At'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['create_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update At'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['update_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
