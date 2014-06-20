<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'compromisopago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cpTipo'); ?>
		<?php echo $form->dropDownList($model,'cpTipo',array(''=>'','Agua'=>'Agua','Luz'=>'Luz','Mantención'=>'Mantención','Otros'=>'Otros',)); ?>
		<?php echo $form->error($model,'cpTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpMonto'); ?>
		<?php echo $form->textField($model,'cpMonto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cpMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaIngreso'); ?>
		<?php echo $form->textField($model,'cpFechaIngreso', array('value'=>date("Y-m-d H:i:s"),'readonly'=>'false')); ?>
		<!-- ingresa la fecha actual y no se puede modificar -->
		<?php echo $form->error($model,'cpFechaIngreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpObs'); ?>
		<?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'cpObs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpNumeroBoleta'); ?>
		<?php echo $form->textField($model,'cpNumeroBoleta',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cpNumeroBoleta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpFechaPago'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"cpFechaPago",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?>
		<?php echo $form->error($model,'cpFechaPago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->