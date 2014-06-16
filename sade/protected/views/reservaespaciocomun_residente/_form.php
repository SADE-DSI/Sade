<?php
/* @var $this Reservaespaciocomun_residenteController */
/* @var $model Reservaespaciocomun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservaespaciocomun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reFechaInicio'); ?>
		<?php echo $form->textField($model,'reFechaInicio'); ?>
		<?php echo $form->error($model,'reFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'adRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecCodigo'); ?>
		<?php echo $form->textField($model,'ecCodigo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ecCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reFechaFin'); ?>
		<?php echo $form->textField($model,'reFechaFin'); ?>
		<?php echo $form->error($model,'reFechaFin'); ?>
	</div>
	

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->