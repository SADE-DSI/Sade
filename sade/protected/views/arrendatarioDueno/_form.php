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

	<div class="row">
		<?php echo $form->labelEx($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('maxlength'=>12)); ?>
		<?php echo $form->error($model,'adRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adClave'); ?>
		<?php echo $form->textField($model,'adClave',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'adClave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persona,'peNombresApellidos'); ?>
		<?php echo $form->textField($persona,'peNombresApellidos'); ?>
		<?php echo $form->error($persona,'peNombresApellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persona,'peEmail'); ?>
		<?php echo $form->textField($persona,'peEmail'); ?>
		<?php echo $form->error($persona,'peEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persona,'peTelefono'); ?>
		<?php echo $form->textField($persona,'peTelefono'); ?>
		<?php echo $form->error($persona,'peTelefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persona,'peDescripcion'); ?>
		<?php echo $form->textField($persona,'peDescripcion'); ?>
		<?php echo $form->error($persona,'peDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($persona,'peDireccion'); ?>
		<?php echo $form->textField($persona,'peDireccion'); ?>
		<?php echo $form->error($persona,'peDireccion'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->