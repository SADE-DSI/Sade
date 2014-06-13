<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'vdCodigo'); ?>
		<?php echo $form->textField($model,'vdCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viRut'); ?>
		<?php echo $form->textField($model,'viRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vdFechaIngreso'); ?>
		<?php echo $form->textField($model,'vdFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caRut'); ?>
		<?php echo $form->textField($model,'caRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vdFechaSalida'); ?>
		<?php echo $form->textField($model,'vdFechaSalida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->