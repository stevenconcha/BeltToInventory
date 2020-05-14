<div class="products index">
	<h2><?php echo __('Products'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
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
	<?php foreach ($products as $product): ?>
	<tr>
		<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['nombre_prod']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['talla']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['stock']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['v_unitario']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['iva']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['id_almacen']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['create_by']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['create_at']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['update_by']); ?>&nbsp;</td>
		<td><?php echo h($product['Product']['update_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
	</ul>
</div>
