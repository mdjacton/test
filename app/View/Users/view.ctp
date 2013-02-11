<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('List Cars'), array('controller' => 'cars', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($user['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Booking Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Car Id'); ?></th>
		<th><?php echo __('Reason'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<!--<th class="actions"><?php // echo __('Actions'); ?></th>-->
	</tr>
	<?php
		$i = 0;
		foreach ($user['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['booking_date']; ?></td>
			<td><?php echo $booking['user_id']; ?></td>
			<td><?php echo $booking['car_id']; ?></td>
			<td><?php echo $booking['reason']; ?></td>
			<td><?php echo $booking['created']; ?></td>
			<td><?php echo $booking['modified']; ?></td>
<!--			<td class="actions">
				<?php //echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php // echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php // echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), null, __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>-->
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
