<?php
/* @var $this ResidedptoController */
/* @var $model Residedpto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'residedpto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rdFechaInicio'); ?>
		<?php echo $form->textField($model,'rdFechaInicio'); ?>
		<?php echo $form->error($model,'rdFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'adRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'dlDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rdFechaFin'); ?>
		<?php echo $form->textField($model,'rdFechaFin'); ?>
		<?php echo $form->error($model,'rdFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->