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
			<?php echo $form->label($model,'peRut'); ?>
			<?php echo $form->textField($model,'peRut',array('size'=>20,'maxlength'=>13)); ?>
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
		<?php echo $form->label($model,'spOtrosDescuento'); ?>
		<?php echo $form->textField($model,'spOtrosDescuento',array('size'=>20,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spHorasExtra'); ?>
		<?php echo $form->textField($model,'spHorasExtra',array('size'=>20,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->