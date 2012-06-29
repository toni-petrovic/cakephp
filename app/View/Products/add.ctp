<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Product', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Product')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('category_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('brand_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('name');
				echo $this->BootstrapForm->input('code');
				echo $this->BootstrapForm->input('bar_code');
				echo $this->BootstrapForm->input('description');
				echo $this->BootstrapForm->input('short_description', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('status', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('picture_layout');
				echo $this->BootstrapForm->input('on_action');
				echo $this->BootstrapForm->input('slider_image');
				echo $this->BootstrapForm->input('slider_order');
				echo $this->BootstrapForm->input('order');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Products')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Categories')), array('controller' => 'categories', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Category')), array('controller' => 'categories', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Brands')), array('controller' => 'brands', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Brand')), array('controller' => 'brands', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Product Pictures')), array('controller' => 'product_pictures', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Product Picture')), array('controller' => 'product_pictures', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>