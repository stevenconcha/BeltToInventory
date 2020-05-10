<div class="peliculas form">
<?php echo $this->Form->create('Pelicula'); ?>
	<fieldset>
		<legend><?php echo __('Add Pelicula'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('resumen');
		echo $this->Form->input('codigo_categoria');
		echo $this->Form->input('minutos_duracion');
		echo $this->Form->input('identificacion_actor');
		echo $this->Form->input('anno_estreno');
		echo $this->Form->input('foto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Peliculas'), array('action' => 'index')); ?></li>
	</ul>
</div>
