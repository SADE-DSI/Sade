<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pmId'); ?>
		<?php echo $form->textField($model,'pmId',array('size'=>20,'maxlength'=>20)); ?>
	</div>

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
		<?php echo $form->label($model,'pmMesAno'); ?>
		<?php echo $form->textField($model,'pmMesAno',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->