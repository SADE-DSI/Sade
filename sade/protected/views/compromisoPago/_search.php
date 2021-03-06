<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cpId'); ?>
		<?php echo $form->textField($model,'cpId',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpTipo'); ?>
		<?php echo $form->textField($model,'cpTipo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaVencimiento'); ?>
		<?php echo $form->textField($model,'cpFechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpMonto'); ?>
		<?php echo $form->textField($model,'cpMonto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpDescripcion'); ?>
		<?php echo $form->textField($model,'cpDescripcion',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaIngreso'); ?>
		<?php echo $form->textField($model,'cpFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpObs'); ?>
		<?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpNumeroBoleta'); ?>
		<?php echo $form->textField($model,'cpNumeroBoleta',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpFechaRealPago'); ?>
		<?php echo $form->textField($model,'cpFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array('class' => 'guardar')); ?>
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->