<div class="stores view">
<h2><?php echo __('Store'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($store['Store']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($store['Store']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($store['Store']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($store['Store']['telefono']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store'), array('action' => 'delete', $store['Store']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $store['Store']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
	</ul>
</div>
