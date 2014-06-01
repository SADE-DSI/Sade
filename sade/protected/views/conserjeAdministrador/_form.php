<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conserjeadministrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array($model,$persona)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'caRut'); ?>
		<?php echo $form->textField($model,'caRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'caRut'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'caClave'); ?>
		<?php echo $form->textField($model,'caClave',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'caClave'); ?>
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