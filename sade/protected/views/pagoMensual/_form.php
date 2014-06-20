<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagomensual-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dlDireccion'); ?>
		<?php echo $form->dropDownList($model,'dlDireccion',CHtml::listData(Dptolocal::model()->findAll(),"dlDireccion","dlDireccion")); ?>
		<?php echo $form->error($model,'dlDireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmFechaPago'); ?>
		<?php echo $form->textField($model,'pmFechaPago', array('value'=>date('Y-m-d'),'readonly'=>'false')); ?>
		<?php echo $form->error($model,'pmFechaPago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmMonto'); ?>
		<?php echo $form->textField($model,'pmMonto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pmMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmObs'); ?>
		<?php echo $form->textField($model,'pmObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'pmObs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmMesAPagar'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"pmMesAPagar",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));

		?>
		<?php echo $form->error($model,'pmMesAPagar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->