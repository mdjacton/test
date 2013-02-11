<?php //  echo "<pre>" ; print_r($id_and_date); echo "</pre>";exit; ?>
<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Add Booking'); ?></legend>
	<?php
		echo $this->Form->input('booking_date',array('type' => 'hidden'));
		echo $this->Form->input('user_id',array('type' => 'hidden'));
		echo $this->Form->input('car_id');
		echo $this->Form->input('reason');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cars'), array('controller' => 'cars', 'action' => 'index')); ?> </li>
	</ul>
</div>
