<div class="inquiries form">
<?php echo $this->Form->create('Inquiry'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inquiry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_usuario');
		echo $this->Form->input('p1');
		echo $this->Form->input('p2');
		echo $this->Form->input('p3');
		echo $this->Form->input('p4');
		echo $this->Form->input('p5');
		echo $this->Form->input('p6');
		echo $this->Form->input('p7');
		echo $this->Form->input('p8');
		echo $this->Form->input('p9');
		echo $this->Form->input('p10');
		echo $this->Form->input('p11');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inquiry.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Inquiry.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Inquiries'), array('action' => 'index')); ?></li>
	</ul>
</div>
