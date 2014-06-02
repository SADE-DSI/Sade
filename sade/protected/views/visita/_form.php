<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'viRut'); ?>
		<?php echo $form->textField($model,'viRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'viRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viNombresApellidos'); ?>
		<?php echo $form->textField($model,'viNombresApellidos',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'viNombresApellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viObs'); ?>
		<?php echo $form->textField($model,'viObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'viObs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->