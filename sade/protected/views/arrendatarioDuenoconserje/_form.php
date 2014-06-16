<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arrendatariodueno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); 
?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array($model,$persona)); ?>



<table class="items">


<tr>
<td>		<?php echo $form->labelEx($model,'adRut'); ?></td><td><?php echo $form->textField($model,'adRut',array('maxlength'=>12)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'adRut'); ?></td></tr>

<tr>
<td>		<?php echo $form->labelEx($model,'adClave'); ?></td><td><?php echo $form->textField($model,'adClave',array('size'=>30,'maxlength'=>30)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'adClave'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peNombresApellidos'); ?></td><td><?php echo $form->textField($persona,'peNombresApellidos'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peNombresApellidos'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peEmail'); ?></td><td><?php echo $form->textField($persona,'peEmail'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peEmail'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peTelefono'); ?></td><td><?php echo $form->textField($persona,'peTelefono'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peTelefono'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peDescripcion'); ?></td><td><?php echo $form->textField($persona,'peDescripcion'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peDescripcion'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peDireccion'); ?></td><td><?php echo $form->textField($persona,'peDireccion'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peDireccion'); ?></td></tr>

</table>
	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->