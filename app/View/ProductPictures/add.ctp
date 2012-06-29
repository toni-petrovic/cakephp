<div class="productPictures form">
<?php echo $this->Form->create('ProductPicture');?>
	<fieldset>
		<legend><?php echo __('Add Product Picture'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('picture_name');
		echo $this->Form->input('mime_type');
		echo $this->Form->input('file_size');
		echo $this->Form->input('subdir');
		echo $this->Form->input('extra_field');
		echo $this->Form->input('ext');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Pictures'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
