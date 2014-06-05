<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */
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
		<?php echo $form->label($model,'cpAFPNombre'); ?>
		<?php echo $form->textField($model,'cpAFPNombre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpAFPMonto'); ?>
		<?php echo $form->textField($model,'cpAFPMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpPrevisionNombre'); ?>
		<?php echo $form->textField($model,'cpPrevisionNombre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpPrevisionMonto'); ?>
		<?php echo $form->textField($model,'cpPrevisionMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpSueldoBruto'); ?>
		<?php echo $form->textField($model,'cpSueldoBruto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaInicio'); ?>
		<?php echo $form->textField($model,'cpFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaFin'); ?>
		<?php echo $form->textField($model,'cpFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
 
