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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model); ?>

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'viRut'); ?></td>
		<td><?php echo $form->textField($model,'viRut',array('size'=>60,'maxlength'=>13, 'placeholder'=>'Ingrese Rut (11.111.111-1)')); ?></td>
		<td><?php echo $form->error($model,'viRut'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'viNombresApellidos'); ?></td>
		<td><?php echo $form->textField($model,'viNombresApellidos',array('size'=>60,'maxlength'=>40, 'placeholder'=>'Ingrese Nombres y Apellidos')); ?></td>
		<td><?php echo $form->error($model,'viNombresApellidos'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'viObs'); ?></td>
		<td><?php echo $form->textField($model,'viObs',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Observaciones')); ?></td>
		<td><?php echo $form->error($model,'viObs'); ?></td>
	</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->