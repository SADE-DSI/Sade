<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ecCodigo'); ?>
		<?php echo $form->textField($model,'ecCodigo',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecDescripcion'); ?>
		<?php echo $form->textField($model,'ecDescripcion',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'ecFrecuencia'); ?>
		<?php echo $form->textField($model,'ecFrecuencia'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->label($model,'ecActivo'); ?>
		<?php echo $form->textField($model,'ecActivo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->