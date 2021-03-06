<?php
/* @var $this Pagomensual_resController */
/* @var $model Pagomensual_res */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagomensual-res-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'dlDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmFechaPago'); ?>
		<?php echo $form->textField($model,'pmFechaPago'); ?>
		<?php echo $form->error($model,'pmFechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmMonto'); ?>
		<?php echo $form->textField($model,'pmMonto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pmMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmObs'); ?>
		<?php echo $form->textField($model,'pmObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'pmObs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmFechaRealPago'); ?>
		<?php echo $form->textField($model,'pmFechaRealPago'); ?>
		<?php echo $form->error($model,'pmFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->