<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id_producto'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_prod'); ?></th>
			<th><?php echo $this->Paginator->sort('talla'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort('v_unitario'); ?></th>
			<th><?php echo $this->Paginator->sort('iva'); ?></th>
			<th><?php echo $this->Paginator->sort('id_almacen'); ?></th>
			<th><?php echo $this->Paginator->sort('create_by'); ?></th>
			<th><?php echo $this->Paginator->sort('create_at'); ?></th>
			<th><?php echo $this->Paginator->sort('update_by'); ?></th>
			<th><?php echo $this->Paginator->sort('update_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id_producto']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['nombre_prod']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['talla']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['stock']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['v_unitario']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['iva']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['id_almacen']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['create_by']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['create_at']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['update_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?></li>
	</ul>
</div>
