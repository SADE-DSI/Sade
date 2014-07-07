<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sgId'); ?>
		<?php echo $form->textField($model,'sgId',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sfComentario'); ?>
		<?php echo $form->textField($model,'sfComentario',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sfRespuesta'); ?>
		<?php echo $form->textField($model,'sfRespuesta',array('size'=>60,'maxlength'=>767)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sfLeido'); ?>
		<?php echo $form->textField($model,'sfLeido',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sfFecha'); ?>
		<?php echo $form->textField($model,'sfFecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sfUsuario'); ?>
		<?php echo $form->textField($model,'sfUsuario',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->