<div class="productPictures view">
<h2><?php  echo __('Product Picture');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productPicture['Product']['name'], array('controller' => 'products', 'action' => 'view', $productPicture['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture Name'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['picture_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mime Type'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Size'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['file_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subdir'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['subdir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra Field'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['extra_field']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ext'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['ext']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($productPicture['ProductPicture']['order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Picture'), array('action' => 'edit', $productPicture['ProductPicture']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Picture'), array('action' => 'delete', $productPicture['ProductPicture']['id']), null, __('Are you sure you want to delete # %s?', $productPicture['ProductPicture']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Pictures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Picture'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
