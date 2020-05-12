<div class="roles form">
<?php echo $this->Form->create('Role'); ?>
	<fieldset>
		<legend><?php echo __('Add Role'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarioroles'), array('controller' => 'usuarioroles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorole'), array('controller' => 'usuarioroles', 'action' => 'add')); ?> </li>
	</ul>
</div>
