<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sueldopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'peRut'); ?></td>
		<td><?php echo $form->textField($model,'peRut',array('size'=>20,'maxlength'=>13)); ?></td>
		<td><?php echo $form->error($model,'peRut'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'spFechaPago'); ?></td>
		<td><?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'spFechaPago', 
							'model'=>$model,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							)
						)); ?></td>
		<td><?php echo $form->error($model,'spFechaPago'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'spOtrosDescuento'); ?></td>
		<td><?php echo $form->textField($model,'spOtrosDescuento',array('size'=>20,'maxlength'=>10)); ?></td>
		<td><?php echo $form->error($model,'spOtrosDescuento'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'spHorasExtra'); ?></td>
		<td><?php echo $form->textField($model,'spHorasExtra',array('size'=>20,'maxlength'=>10)); ?></td>
		<td><?php echo $form->error($model,'spHorasExtra'); ?></td>
	</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->