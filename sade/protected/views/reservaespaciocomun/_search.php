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
		<?php echo $form->label($model,'reId'); ?>
		<?php echo $form->textField($model,'reId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecCodigo'); ?>
		<?php echo $form->textField($model,'ecCodigo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reFecha'); ?>
		<?php echo $form->textField($model,'reFecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reHoraInicio'); ?>
		<?php echo $form->textField($model,'reHoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reHoraFin'); ?>
		<?php echo $form->textField($model,'reHoraFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->