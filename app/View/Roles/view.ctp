<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($role['Role']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($role['Role']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $role['Role']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarioroles'), array('controller' => 'usuarioroles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuariorole'), array('controller' => 'usuarioroles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarioroles'); ?></h3>
	<?php if (!empty($role['Usuariorole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Activo'); ?></th>
		<th><?php echo __('Opcional'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['Usuariorole'] as $usuariorole): ?>
		<tr>
			<td><?php echo $usuariorole['id']; ?></td>
			<td><?php echo $usuariorole['role_id']; ?></td>
			<td><?php echo $usuariorole['usuario_id']; ?></td>
			<td><?php echo $usuariorole['activo']; ?></td>
			<td><?php echo $usuariorole['opcional']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarioroles', 'action' => 'view', $usuariorole['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarioroles', 'action' => 'edit', $usuariorole['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarioroles', 'action' => 'delete', $usuariorole['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuariorole['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuariorole'), array('controller' => 'usuarioroles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
