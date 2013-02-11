<div class="cars form">
<?php echo $this->Form->create('Car'); ?>
	<fieldset>
		<legend><?php echo __('Edit Car'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('km');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Car.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Car.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
