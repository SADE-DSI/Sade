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

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'viRut'); ?></td>
		<td><?php echo $form->textField($model,'viRut',array('size'=>13,'maxlength'=>13)); ?></td>
		<td><?php echo $form->error($model,'viRut'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'dlDireccion'); ?></td>
		<td><?php echo $form->dropDownList($model, 'dlDireccion', $model->getDirecciones()); ?></td>
		<td><?php echo $form->error($model,'dlDireccion'); ?></td>
	</tr>

	<tr>
		<td><?php $form->labelEx($model,'caRut'); ?></td>
		<td><?php $form->textField($model,'caRut',array('size'=>13,'maxlength'=>13)); ?></td>
		<td><?php $form->error($model,'caRut'); ?></td>
	</tr>
	</table>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->