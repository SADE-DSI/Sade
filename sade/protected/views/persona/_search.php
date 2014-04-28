<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'peRut'); ?>
		<?php echo $form->textField($model,'peRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peNombresApellidos'); ?>
		<?php echo $form->textField($model,'peNombresApellidos',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peActivo'); ?>
		<?php echo $form->textField($model,'peActivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peEmail'); ?>
		<?php echo $form->textField($model,'peEmail',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peTelefono'); ?>
		<?php echo $form->textField($model,'peTelefono',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peTipo'); ?>
		<?php echo $form->textField($model,'peTipo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peDescripcion'); ?>
		<?php echo $form->textField($model,'peDescripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'peDireccion'); ?>
		<?php echo $form->textField($model,'peDireccion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->