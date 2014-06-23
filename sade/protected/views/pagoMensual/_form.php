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
		<?php echo $form->labelEx($model,'pmMesAno'); 
		$orden = new CDbCriteria;
		$orden->order = 'gmMesAno ASC';
		 echo $form->dropDownList($model,'pmMesAno',CHtml::listData(Gastomensual::model()->findAll($orden),"gmMesAno","gmMesAno"),
		 array(
		 	'ajax'=>array(
		 		'type'=>'POST',
		 		'url'=>Ccontroller::createUrl('pagoMensual/Obtenerprecio'),
		 		'update'=>'#'.CHtml::activeId($model,'pmMonto'),
		 		),
		 	)
		 	); 
		 echo $form->error($model,'pmMesAno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmMonto'); ?>
		<?php echo $form->dropDownList($model,'pmMonto',array(''=>'seleccione el año')); ?>
		<?php echo $form->error($model,'pmMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pmObs'); ?>
		<?php echo $form->textField($model,'pmObs',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'pmObs'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->