<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'spCodigo'); ?>
		<?php echo $form->textField($model,'spCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpCodigo'); ?>
		<?php echo $form->textField($model,'cpCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spFechaPago'); ?>
		<?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'spFechaPago', 
							'model'=>$model,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							)
						)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spFechaVencimiento'); ?>
		<?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'spFechaVencimiento', 
							'model'=>$model,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							)
						)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spOtrosDescuentos'); ?>
		<?php echo $form->textField($model,'spOtrosDescuentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spHorasExtras'); ?>
		<?php echo $form->textField($model,'spHorasExtras',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->