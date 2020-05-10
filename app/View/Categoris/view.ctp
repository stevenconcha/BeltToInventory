<div class="categoris view">
<h2><?php echo __('Categori'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categori['Categori']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($categori['Categori']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categori'), array('action' => 'edit', $categori['Categori']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categori'), array('action' => 'delete', $categori['Categori']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categori['Categori']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoris'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categori'), array('action' => 'add')); ?> </li>
	</ul>
</div>
