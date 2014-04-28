<?php
/* @var $this MaterialController */
/* @var $model Material */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'material-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'maNombre'); ?>
		<?php echo $form->textField($model,'maNombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'maNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maDescripcion'); ?>
		<?php echo $form->textField($model,'maDescripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maEstado'); ?>
		<?php echo $form->textField($model,'maEstado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'maEstado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->