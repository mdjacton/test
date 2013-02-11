<div class="cars view">
<h2><?php  echo __('Car'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($car['Car']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($car['Car']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Km'); ?></dt>
		<dd>
			<?php echo h($car['Car']['km']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($car['Car']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($car['Car']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Car'), array('action' => 'edit', $car['Car']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Car'), array('action' => 'delete', $car['Car']['id']), null, __('Are you sure you want to delete # %s?', $car['Car']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cars'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Car'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($car['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Booking Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Car Id'); ?></th>
		<th><?php echo __('Reason'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($car['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['booking_date']; ?></td>
			<td><?php echo $booking['user_id']; ?></td>
			<td><?php echo $booking['car_id']; ?></td>
			<td><?php echo $booking['reason']; ?></td>
			<td><?php echo $booking['created']; ?></td>
			<td><?php echo $booking['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), null, __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
