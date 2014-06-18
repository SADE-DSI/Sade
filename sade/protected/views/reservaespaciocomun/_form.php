<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservaespaciocomun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reFechaInicio'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"reFechaInicio",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?>
		<?php echo $form->error($model,'reFechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adRut'); ?>
		<?php echo $form->dropDownList($model,'adRut',CHtml::listData(Arrendatariodueno::model()->findAll(),"adRut","adRut")); ?>
		<?php echo $form->error($model,'adRut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecCodigo'); ?>
		<?php echo $form->dropDownList($model,'ecCodigo',CHtml::listData(Espaciocomun::model()->findAll(),"ecCodigo","ecCodigo")); ?>
		<?php echo $form->error($model,'ecCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reFechaFin'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"reFechaFin",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?>
		<?php echo $form->error($model,'reFechaFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->