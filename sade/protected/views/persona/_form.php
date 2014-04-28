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
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'peRut'); ?>
		<?php echo $form->textField($model,'peRut',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'peRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peNombresApellidos'); ?>
		<?php echo $form->textField($model,'peNombresApellidos',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'peNombresApellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peActivo'); ?>
		<?php echo $form->textField($model,'peActivo'); ?>
		<?php echo $form->error($model,'peActivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peEmail'); ?>
		<?php echo $form->textField($model,'peEmail',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'peEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peTelefono'); ?>
		<?php echo $form->textField($model,'peTelefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'peTelefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peTipo'); ?>
		<?php echo $form->dropDownList($model, 'peTipo', array(1=>'test1', 2=>'test2'));?>
		<?php echo $form->error($model,'peTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peDescripcion'); ?>
		<?php echo $form->textField($model,'peDescripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'peDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'peDireccion'); ?>
		<?php echo $form->textField($model,'peDireccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'peDireccion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->