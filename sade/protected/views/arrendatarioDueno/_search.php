<?php
/* @var $this ArrendatarioDuenoController  */
/* @var $model ArrendatarioDueno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adClave'); ?>
		<?php echo $form->textField($model,'adClave',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adEstado'); ?>
		<?php echo $form->textField($model,'adEstado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adFechaLiberacion'); ?>
		<?php echo $form->textField($model,'adFechaLiberacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->