<?php
/* @var $this BookingController */
/* @var $model Booking */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'booking-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passenger'); ?>
		<?php echo $form->textField($model,'passenger',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'passenger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luggage'); ?>
		<?php echo $form->textField($model,'luggage',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'luggage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trip_type'); ?>
		<?php echo $form->textField($model,'trip_type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'trip_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_type'); ?>
		<?php echo $form->textField($model,'car_type',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'car_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'airline'); ?>
		<?php echo $form->textField($model,'airline',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'airline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flight'); ?>
		<?php echo $form->textField($model,'flight',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'flight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pickup_note'); ?>
		<?php echo $form->textField($model,'pickup_note',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'pickup_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dropoff_note'); ?>
		<?php echo $form->textField($model,'dropoff_note',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'dropoff_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pickup_time'); ?>
		<?php echo $form->textField($model,'pickup_time'); ?>
		<?php echo $form->error($model,'pickup_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->