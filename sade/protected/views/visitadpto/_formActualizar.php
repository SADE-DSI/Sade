<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitadpto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model, $visita); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'viRut'); ?>
		<?php echo $form->textField($model,'viRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'viRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dlDireccion'); ?>
		<?php echo $form->dropDownList($model, 'dlDireccion', $model->getDirecciones()); ?>
		<?php echo $form->error($model,'dlDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caRut'); ?>
		<?php echo $form->textField($model,'caRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'caRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vdFechaSalida'); ?>
		<?php echo $form->textField($model,'vdFechaSalida'); ?>
		<?php echo $form->error($model,'vdFechaSalida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->