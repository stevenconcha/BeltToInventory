<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($product['Product']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Prod'); ?></dt>
		<dd>
			<?php echo h($product['Product']['nombre_prod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($product['Product']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($product['Product']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('V Unitario'); ?></dt>
		<dd>
			<?php echo h($product['Product']['v_unitario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iva'); ?></dt>
		<dd>
			<?php echo h($product['Product']['iva']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Almacen'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id_almacen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create By'); ?></dt>
		<dd>
			<?php echo h($product['Product']['create_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Create At'); ?></dt>
		<dd>
			<?php echo h($product['Product']['create_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update By'); ?></dt>
		<dd>
			<?php echo h($product['Product']['update_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update At'); ?></dt>
		<dd>
			<?php echo h($product['Product']['update_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
