<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Categories'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('brand_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('parent_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('description');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('status');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('order');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($categories as $category): ?>
			<tr>
				<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($category['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $category['Brand']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
				</td>
				<td><?php echo h($category['Category']['name']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['status']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['modified']); ?>&nbsp;</td>
				<td><?php echo h($category['Category']['order']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Brands')), array('controller' => 'brands', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Brand')), array('controller' => 'brands', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Parent Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Products')), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Product')), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>