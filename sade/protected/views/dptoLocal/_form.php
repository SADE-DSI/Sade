<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dptolocal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos Con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'dlDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dlMts2Construidos'); ?>
		<?php echo $form->textField($model,'dlMts2Construidos'); ?>
		<?php echo $form->error($model,'dlMts2Construidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dlValorArriendo'); ?>
		<?php echo $form->textField($model,'dlValorArriendo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dlValorArriendo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dlActivo'); ?>
		<?php echo $form->textField($model,'dlActivo',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dlActivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->