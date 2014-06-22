<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

<table class="items">

<tr>
<td>	<?php echo $form->labelEx($model,'peRut'); ?></td><td><?php echo $form->textField($model,'peRut',array('size'=>12,'maxlength'=>12)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peRut'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'peNombresApellidos'); ?></td><td><?php echo $form->textField($model,'peNombresApellidos',array('size'=>60,'maxlength'=>80)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peNombresApellidos'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'peEmail'); ?></td><td><?php echo $form->textField($model,'peEmail',array('size'=>30,'maxlength'=>30)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peEmail'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'peTelefono'); ?></td><td><?php echo $form->textField($model,'peTelefono',array('size'=>10,'maxlength'=>10)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peTelefono'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'peDescripcion'); ?></td><td><?php echo $form->textField($model,'peDescripcion',array('size'=>60,'maxlength'=>255)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peDescripcion'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'peDireccion'); ?></td><td><?php echo $form->textField($model,'peDireccion',array('size'=>60,'maxlength'=>255)); ?></td>
</tr>		
<tr><td><?php echo $form->error($model,'peDireccion'); ?></td></tr>
</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->