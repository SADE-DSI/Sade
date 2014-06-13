<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'viRut'); ?>
		<?php echo $form->textField($model,'viRut',array('size'=>40,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viNombresApellidos'); ?>
		<?php echo $form->textField($model,'viNombresApellidos',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viObs'); ?>
		<?php echo $form->textField($model,'viObs',array('size'=>40,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->