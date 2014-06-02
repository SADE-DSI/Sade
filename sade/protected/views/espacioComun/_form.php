<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'espaciocomun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ecCodigo'); ?>
		<?php echo $form->textField($model,'ecCodigo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ecCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecDescripcion'); ?>
		<?php echo $form->textField($model,'ecDescripcion',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'ecDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecFrecuencia'); ?>
		<?php echo $form->textField($model,'ecFrecuencia'); ?>
		<?php echo $form->error($model,'ecFrecuencia'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'ecActivo'); ?>
		<?php echo $form->textField($model,'ecActivo'); ?>
		<?php echo $form->error($model,'ecActivo'); ?>
	</div> -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->