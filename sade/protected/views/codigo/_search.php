<?php
/* @var $this CodigoController */
/* @var $model Codigo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'coCodigo'); ?>
		<?php echo $form->textField($model,'coCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coNombre'); ?>
		<?php echo $form->textField($model,'coNombre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->