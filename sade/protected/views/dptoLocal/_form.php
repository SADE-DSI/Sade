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

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'dlDireccion'); ?></td>
		<td><?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?></td>
		<td><?php echo $form->error($model,'dlDireccion'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'dlMts2Construidos'); ?></td>
		<td><?php echo $form->textField($model,'dlMts2Construidos',array('size'=>60)); ?></td>
		<td><?php echo $form->error($model,'dlMts2Construidos'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'dlValorArriendo'); ?></td>
		<td><?php echo $form->textField($model,'dlValorArriendo',array('size'=>60,'maxlength'=>10)); ?></td>
		<td><?php echo $form->error($model,'dlValorArriendo'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'dlActivo'); ?></td>
		<td><?php echo $form->dropDownList($model, 'dlActivo', array("Si"=>'Si', 'No'=>'No')); ?></td>
		<td><?php echo $form->error($model,'dlActivo'); ?></td>
	</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->