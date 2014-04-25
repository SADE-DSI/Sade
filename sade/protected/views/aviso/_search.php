<?php
/* @var $this AvisoController */
/* @var $model Aviso */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'avCodigo'); ?>
		<?php echo $form->textField($model,'avCodigo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avTitulo'); ?>
		<?php echo $form->textField($model,'avTitulo',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avFecha'); ?>
		<?php echo $form->textField($model,'avFecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avAviso'); ?>
		<?php echo $form->textField($model,'avAviso',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->