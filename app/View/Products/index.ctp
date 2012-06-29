<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Products'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table table-striped">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('category_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('brand_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('code');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('bar_code');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('description');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('short_description');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('status');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('picture_layout');?></th>				
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($products as $product): ?>
			<tr>
				<td><?php echo h($product['Product']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $product['Brand']['id'])); ?>
				</td>
				<td><?php echo h($product['Product']['name']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['code']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['bar_code']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['description']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['short_description']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['status']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['created']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['modified']); ?>&nbsp;</td>
				<td><?php echo h($product['Product']['picture_layout']); ?>&nbsp;</td>				
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Product')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Brands')), array('controller' => 'brands', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Brand')), array('controller' => 'brands', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Product Pictures')), array('controller' => 'product_pictures', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Product Picture')), array('controller' => 'product_pictures', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>