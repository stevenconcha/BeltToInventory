<div class="inquiries view">
<h2><?php echo __('Inquiry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Usuario'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['id_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P1'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P2'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P3'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P4'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P5'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P6'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P7'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p7']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P8'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p8']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P9'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p9']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P10'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p10']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('P11'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['p11']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($inquiry['Inquiry']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inquiry'), array('action' => 'edit', $inquiry['Inquiry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inquiry'), array('action' => 'delete', $inquiry['Inquiry']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inquiry['Inquiry']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Inquiries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inquiry'), array('action' => 'add')); ?> </li>
	</ul>
</div>
