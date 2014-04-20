<?php
/* @var $this DptoLocalController */
/* @var $model DptoLocal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dlDireccion'); ?>
		<?php echo $form->textField($model,'dlDireccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlMts2Construidos'); ?>
		<?php echo $form->textField($model,'dlMts2Construidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dlValorArriendo'); ?>
		<?php echo $form->textField($model,'dlValorArriendo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->