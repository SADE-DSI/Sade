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
	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'avTitulo'); ?></td>
		<td><?php echo $form->textField($model,'avTitulo',array('size'=>25,'maxlength'=>40)); ?></td>
		<td><?php echo $form->error($model,'avTitulo'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'avAviso'); ?></td>
		<td><?php echo $form->textArea($model,'avAviso',array('maxlength'=>767)); ?></td>
		<td><?php echo $form->error($model,'avAviso'); ?></td>
	</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->