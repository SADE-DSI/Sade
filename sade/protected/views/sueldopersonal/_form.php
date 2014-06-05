<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sueldopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'spFechaPago'); ?>
		<?php echo $form->textField($model,'spFechaPago'); ?>
		<?php echo $form->error($model,'spFechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peRut'); ?>
		<?php echo $form->textField($model,'peRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'peRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spOtrosDescuento'); ?>
		<?php echo $form->textField($model,'spOtrosDescuento',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'spOtrosDescuento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spHorasExtra'); ?>
		<?php echo $form->textField($model,'spHorasExtra',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'spHorasExtra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->