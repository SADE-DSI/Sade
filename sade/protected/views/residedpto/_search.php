<?php
/* @var $this ResidedptoController */
/* @var $model Residedpto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'rdFechaInicio'); ?>
		<?php echo $form->textField($model,'rdFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rdFechaFin'); ?>
		<?php echo $form->textField($model,'rdFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->