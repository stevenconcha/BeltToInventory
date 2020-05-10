<div class="categoris form">
<?php echo $this->Form->create('Categori'); ?>
	<fieldset>
		<legend><?php echo __('Add Categori'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categoris'), array('action' => 'index')); ?></li>
	</ul>
</div>
