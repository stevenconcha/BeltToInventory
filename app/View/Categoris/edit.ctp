<div class="categoris form">
<?php echo $this->Form->create('Categori'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categori'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Categori.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Categori.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Categoris'), array('action' => 'index')); ?></li>
	</ul>
</div>
