<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */
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
		<?php echo $form->label($model,'dlMts2Construidos'); ?>
		<?php echo $form->textField($model,'dlMts2Construidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlValorArriendo'); ?>
		<?php echo $form->textField($model,'dlValorArriendo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlActivo'); ?>
		<?php echo $form->textField($model,'dlActivo',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->