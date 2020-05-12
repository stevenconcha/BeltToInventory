<div class="cities view">
<h2><?php echo __('City'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['city_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($city['City']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($city['City']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $city['City']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
	</ul>
</div>
