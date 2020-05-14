<div class="stores index">
	<h2><?php echo __('Stores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stores as $store): ?>
	<tr>
		<td><?php echo h($store['Store']['id']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($store['Store']['telefono']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $store['Store']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $store['Store']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?></li>
	</ul>
</div>
