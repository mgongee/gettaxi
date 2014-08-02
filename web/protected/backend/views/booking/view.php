<?php
/* @var $this BookingController */
/* @var $model Booking */

$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Booking', 'url'=>array('index')),
	array('label'=>'Create Booking', 'url'=>array('create')),
	array('label'=>'Update Booking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Booking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Booking', 'url'=>array('admin')),
);
?>

<h1>View Booking #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'state',
		'city',
		'phone',
		'passenger',
		'luggage',
		'trip_type',
		'car_type',
		'airline',
		'flight',
		'pickup_note',
		'dropoff_note',
		'pickup_time',
		'created_at',
		'status',
	),
)); ?>
