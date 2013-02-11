<?php //echo "<pre>" ; print_r($booking); echo "</pre>";exit;
?>
<div class="bookings view">
<h2><?php  echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Date'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['booking_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo h($booking['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Car'); ?></dt>
		<dd>
			<?php echo h($booking['Car']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
            <?php if($user_id == $booking['Booking']['user_id'] || $booking['User']['group_id'] == 6) :?>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
            <?php endif;?>
            <?php if($booking['User']['group_id'] == 6) :?>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cars'), array('controller' => 'cars', 'action' => 'index')); ?> </li>
            <?php endif;?>
                <li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
	</ul>
</div>
