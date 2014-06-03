<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aviso-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'avTitulo'); ?>
		<?php echo $form->textField($model,'avTitulo',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'avTitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avAviso'); ?>
		<?php echo $form->textField($model,'avAviso',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'avAviso'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->