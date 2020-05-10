<div class="peliculas index">
	<h2><?php echo __('Peliculas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('resumen'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('minutos_duracion'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion_actor'); ?></th>
			<th><?php echo $this->Paginator->sort('anno_estreno'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($peliculas as $pelicula): ?>
	<tr>
		<td><?php echo h($pelicula['Pelicula']['id']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['resumen']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['codigo_categoria']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['minutos_duracion']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['identificacion_actor']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['anno_estreno']); ?>&nbsp;</td>
		<td><?php echo h($pelicula['Pelicula']['foto']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pelicula['Pelicula']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pelicula['Pelicula']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pelicula['Pelicula']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Pelicula'), array('action' => 'add')); ?></li>
	</ul>
</div>
