<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dptolocal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos Con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'adFechaLiberacion'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"adFechaLiberacion",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));

		?>
		<?php echo $form->error($model,'adFechaLiberacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Generar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->