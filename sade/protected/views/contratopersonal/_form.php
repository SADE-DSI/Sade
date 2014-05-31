<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos Con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'peRut'); ?>
		<?php echo $form->textField($model,'peRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'peRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpAFPNombre'); ?>
		<?php echo $form->textField($model,'cpAFPNombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cpAFPNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpAFPMonto'); ?>
		<?php echo $form->textField($model,'cpAFPMonto'); ?>
		<?php echo $form->error($model,'cpAFPMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpPrevisionNombre'); ?>
		<?php echo $form->textField($model,'cpPrevisionNombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cpPrevisionNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpPrevisionMonto'); ?>
		<?php echo $form->textField($model,'cpPrevisionMonto'); ?>
		<?php echo $form->error($model,'cpPrevisionMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpSueldoBruto'); ?>
		<?php echo $form->textField($model,'cpSueldoBruto'); ?>
		<?php echo $form->error($model,'cpSueldoBruto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaInicio'); ?>
		<?php echo $form->textField($model,'cpFechaInicio'); ?>
		<?php echo $form->error($model,'cpFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaFin'); ?>
		<?php echo $form->textField($model,'cpFechaFin'); ?>
		<?php echo $form->error($model,'cpFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar Cambios'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->