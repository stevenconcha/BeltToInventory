<div class="peliculas view">
<h2><?php echo __('Pelicula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumen'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['resumen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Categoria'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['codigo_categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minutos Duracion'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['minutos_duracion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion Actor'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['identificacion_actor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anno Estreno'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['anno_estreno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($pelicula['Pelicula']['foto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pelicula'), array('action' => 'edit', $pelicula['Pelicula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pelicula'), array('action' => 'delete', $pelicula['Pelicula']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pelicula['Pelicula']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pelicula'), array('action' => 'add')); ?> </li>
	</ul>
</div>
