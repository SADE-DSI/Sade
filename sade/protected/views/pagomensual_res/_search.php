<?php
/* @var $this Pagomensual_resController */
/* @var $model Pagomensual_res */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmFechaPago'); ?>
		<?php echo $form->textField($model,'pmFechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmMonto'); ?>
		<?php echo $form->textField($model,'pmMonto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmObs'); ?>
		<?php echo $form->textField($model,'pmObs',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmFechaRealPago'); ?>
		<?php echo $form->textField($model,'pmFechaRealPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmId'); ?>
		<?php echo $form->textField($model,'pmId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->