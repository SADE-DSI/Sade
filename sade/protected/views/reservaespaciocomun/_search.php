<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'reFechaInicio'); ?>
		<?php echo $form->textField($model,'reFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecCodigo'); ?>
		<?php echo $form->textField($model,'ecCodigo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reFechaFin'); ?>
		<?php echo $form->textField($model,'reFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->