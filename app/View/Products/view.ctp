<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Product');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($product['Product']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Brand'); ?></dt>
			<dd>
				<?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $product['Brand']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($product['Product']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Code'); ?></dt>
			<dd>
				<?php echo h($product['Product']['code']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Bar Code'); ?></dt>
			<dd>
				<?php echo h($product['Product']['bar_code']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($product['Product']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Short Description'); ?></dt>
			<dd>
				<?php echo h($product['Product']['short_description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Status'); ?></dt>
			<dd>
				<?php echo h($product['Product']['status']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($product['Product']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($product['Product']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Picture Layout'); ?></dt>
			<dd>
				<?php echo h($product['Product']['picture_layout']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('On Action'); ?></dt>
			<dd>
				<?php echo h($product['Product']['on_action']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Slider Image'); ?></dt>
			<dd>
				<?php echo h($product['Product']['slider_image']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Slider Order'); ?></dt>
			<dd>
				<?php echo h($product['Product']['slider_order']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Order'); ?></dt>
			<dd>
				<?php echo h($product['Product']['order']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Product')), array('action' => 'edit', $product['Product']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Product')), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Products')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Product')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Brands')), array('controller' => 'brands', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Brand')), array('controller' => 'brands', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Product Pictures')), array('controller' => 'product_pictures', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Product Picture')), array('controller' => 'product_pictures', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
<div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Product Pictures')); ?></h3>
	<?php if (!empty($product['ProductPicture'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Product Id'); ?></th>
				<th><?php echo __('Picture Name'); ?></th>
				<th><?php echo __('Mime Type'); ?></th>
				<th><?php echo __('File Size'); ?></th>
				<th><?php echo __('Subdir'); ?></th>
				<th><?php echo __('Extra Field'); ?></th>
				<th><?php echo __('Ext'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Order'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($product['ProductPicture'] as $productPicture): ?>
			<tr>
				<td><?php echo $productPicture['id'];?></td>
				<td><?php echo $productPicture['product_id'];?></td>
				<td><?php echo $productPicture['picture_name'];?></td>
				<td><?php echo $productPicture['mime_type'];?></td>
				<td><?php echo $productPicture['file_size'];?></td>
				<td><?php echo $productPicture['subdir'];?></td>
				<td><?php echo $productPicture['extra_field'];?></td>
				<td><?php echo $productPicture['ext'];?></td>
				<td><?php echo $productPicture['created'];?></td>
				<td><?php echo $productPicture['modified'];?></td>
				<td><?php echo $productPicture['order'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'product_pictures', 'action' => 'view', $productPicture['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_pictures', 'action' => 'edit', $productPicture['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_pictures', 'action' => 'delete', $productPicture['id']), null, __('Are you sure you want to delete # %s?', $productPicture['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Product Picture')), array('controller' => 'product_pictures', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
