<?php
/* @var $this PagoMensualController */
/* @var $model PagoMensual */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pmCodigo'); ?>
		<?php echo $form->textField($model,'pmCodigo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmFechaPago'); ?>
		<?php echo $form->textField($model,'pmFechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmMonto'); ?>
		<?php echo $form->textField($model,'pmMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmObs'); ?>
		<?php echo $form->textField($model,'pmObs',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pmFechaRealPago'); ?>
		<?php echo $form->textField($model,'pmFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->