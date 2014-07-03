<?php
/* @var $this Compromisopago_conreController */
/* @var $model Compromisopago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compromisopago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpTipo'); ?>
		<?php echo $form->textField($model,'cpTipo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cpTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaVencimiento'); ?>
		<?php echo $form->textField($model,'cpFechaVencimiento'); ?>
		<?php echo $form->error($model,'cpFechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpMonto'); ?>
		<?php echo $form->textField($model,'cpMonto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cpMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpDescripcion'); ?>
		<?php echo $form->textField($model,'cpDescripcion',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'cpDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaIngreso'); ?>
		<?php echo $form->textField($model,'cpFechaIngreso'); ?>
		<?php echo $form->error($model,'cpFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpObs'); ?>
		<?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'cpObs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpNumeroBoleta'); ?>
		<?php echo $form->textField($model,'cpNumeroBoleta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cpNumeroBoleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaRealPago'); ?>
		<?php echo $form->textField($model,'cpFechaRealPago'); ?>
		<?php echo $form->error($model,'cpFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->