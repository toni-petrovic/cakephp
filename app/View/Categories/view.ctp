<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Category');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($category['Category']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Brand'); ?></dt>
			<dd>
				<?php echo $this->Html->link($category['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $category['Brand']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Parent Category'); ?></dt>
			<dd>
				<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($category['Category']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Description'); ?></dt>
			<dd>
				<?php echo h($category['Category']['description']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Status'); ?></dt>
			<dd>
				<?php echo h($category['Category']['status']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($category['Category']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($category['Category']['modified']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Order'); ?></dt>
			<dd>
				<?php echo h($category['Category']['order']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Category')), array('action' => 'edit', $category['Category']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Category')), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Brands')), array('controller' => 'brands', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Brand')), array('controller' => 'brands', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Parent Category')), array('controller' => 'categories', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Products')), array('controller' => 'products', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Product')), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
<div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Categories')); ?></h3>
	<?php if (!empty($category['ChildCategory'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Brand Id'); ?></th>
				<th><?php echo __('Parent Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Description'); ?></th>
				<th><?php echo __('Status'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Order'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($category['ChildCategory'] as $childCategory): ?>
			<tr>
				<td><?php echo $childCategory['id'];?></td>
				<td><?php echo $childCategory['brand_id'];?></td>
				<td><?php echo $childCategory['parent_id'];?></td>
				<td><?php echo $childCategory['name'];?></td>
				<td><?php echo $childCategory['description'];?></td>
				<td><?php echo $childCategory['status'];?></td>
				<td><?php echo $childCategory['created'];?></td>
				<td><?php echo $childCategory['modified'];?></td>
				<td><?php echo $childCategory['order'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $childCategory['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $childCategory['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $childCategory['id']), null, __('Are you sure you want to delete # %s?', $childCategory['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Child Category')), array('controller' => 'categories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Products')); ?></h3>
	<?php if (!empty($category['Product'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Category Id'); ?></th>
				<th><?php echo __('Brand Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Code'); ?></th>
				<th><?php echo __('Bar Code'); ?></th>
				<th><?php echo __('Description'); ?></th>
				<th><?php echo __('Short Description'); ?></th>
				<th><?php echo __('Status'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Picture Layout'); ?></th>
				<th><?php echo __('On Action'); ?></th>
				<th><?php echo __('Slider Image'); ?></th>
				<th><?php echo __('Slider Order'); ?></th>
				<th><?php echo __('Order'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($category['Product'] as $product): ?>
			<tr>
				<td><?php echo $product['id'];?></td>
				<td><?php echo $product['category_id'];?></td>
				<td><?php echo $product['brand_id'];?></td>
				<td><?php echo $product['name'];?></td>
				<td><?php echo $product['code'];?></td>
				<td><?php echo $product['bar_code'];?></td>
				<td><?php echo $product['description'];?></td>
				<td><?php echo $product['short_description'];?></td>
				<td><?php echo $product['status'];?></td>
				<td><?php echo $product['created'];?></td>
				<td><?php echo $product['modified'];?></td>
				<td><?php echo $product['picture_layout'];?></td>
				<td><?php echo $product['on_action'];?></td>
				<td><?php echo $product['slider_image'];?></td>
				<td><?php echo $product['slider_order'];?></td>
				<td><?php echo $product['order'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Product')), array('controller' => 'products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
