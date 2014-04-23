<?php
/* @var $this CompromisoPagoController */
/* @var $model CompromisoPago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compromiso-pago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpCodigo'); ?>
		<?php echo $form->textField($model,'cpCodigo'); ?>
		<?php echo $form->error($model,'cpCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaVencimiento'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"cpFechaVencimiento",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));

		?>
		<?php echo $form->error($model,'cpFechaVencimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpMonto'); ?>
		<?php echo $form->textField($model,'cpMonto'); ?>
		<?php echo $form->error($model,'cpMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpDescripcion'); ?>
		<?php echo $form->textField($model,'cpDescripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cpDescripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaIngreso'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"cpFechaIngreso",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));

		?>
		<?php echo $form->error($model,'cpFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpObs'); ?>
		<?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cpObs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpNumeroBoleta'); ?>
		<?php echo $form->textField($model,'gpNumeroBoleta'); ?>
		<?php echo $form->error($model,'gpNumeroBoleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gpFechaRealPago'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"gpFechaRealPago",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));

		?>
		<?php echo $form->error($model,'gpFechaRealPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->