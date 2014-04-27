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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

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
		<?php echo $form->textField($model,'dlValorArriendo'); ?>
		<?php echo $form->error($model,'dlValorArriendo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->