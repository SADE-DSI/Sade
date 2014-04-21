<?php
/* @var $this CompromisoPagoController */
/* @var $model CompromisoPago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cpId'); ?>
		<?php echo $form->textField($model,'cpId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpCodigo'); ?>
		<?php echo $form->textField($model,'cpCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaVencimiento'); ?>
		<?php echo $form->textField($model,'cpFechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpMonto'); ?>
		<?php echo $form->textField($model,'cpMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpDescripcion'); ?>
		<?php echo $form->textField($model,'cpDescripcion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaIngreso'); ?>
		<?php echo $form->textField($model,'cpFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpObs'); ?>
		<?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gpNumeroBoleta'); ?>
		<?php echo $form->textField($model,'gpNumeroBoleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gpFechaRealPago'); ?>
		<?php echo $form->textField($model,'gpFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->