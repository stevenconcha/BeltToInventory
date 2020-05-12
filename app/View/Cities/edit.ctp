<div class="cities form">
<?php echo $this->Form->create('City'); ?>
	<fieldset>
		<legend><?php echo __('Edit City'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('city_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('City.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('City.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?></li>
	</ul>
</div>
