<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sugerencias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

		<?php if ( Yii::app()->user->isSuperAdmin) {?>
		<?php echo $form->labelEx($model,'sfComentario'); ?>
		<?php echo $form->textField($model,'sfComentario',array('size'=>60,'readonly'=> true)); ?>
		<?php echo $form->error($model,'sfComentario');} 

		else {?>
		<?php echo $form->labelEx($model,'sfComentario'); ?>
		<?php echo $form->textField($model,'sfComentario',array('size'=>60,'maxlength'=>767)); ?>
		<?php echo $form->error($model,'sfComentario');} ?>
	</div>

	<div class="row"> 

		<?php if ( Yii::app()->user->isSuperAdmin) {
			echo $form->labelEx($model,'sfRespuesta');
			echo $form->textField($model,'sfRespuesta',array('size'=>60,'maxlength'=>767)); 
		 	echo $form->error($model,'sfRespuesta'); }?>


	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->