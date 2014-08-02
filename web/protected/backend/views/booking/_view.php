<?php
/* @var $this BookingController */
/* @var $data Booking */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passenger')); ?>:</b>
	<?php echo CHtml::encode($data->passenger); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('luggage')); ?>:</b>
	<?php echo CHtml::encode($data->luggage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trip_type')); ?>:</b>
	<?php echo CHtml::encode($data->trip_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('car_type')); ?>:</b>
	<?php echo CHtml::encode($data->car_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('airline')); ?>:</b>
	<?php echo CHtml::encode($data->airline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flight')); ?>:</b>
	<?php echo CHtml::encode($data->flight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pickup_note')); ?>:</b>
	<?php echo CHtml::encode($data->pickup_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dropoff_note')); ?>:</b>
	<?php echo CHtml::encode($data->dropoff_note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pickup_time')); ?>:</b>
	<?php echo CHtml::encode($data->pickup_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>