<?php
/* @var $this Reservaespaciocomun_resController */
/* @var $model Reservaespaciocomun_res */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservaespaciocomun-res-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ecCodigo'); ?>
		<?php echo $form->dropDownList($model,'ecCodigo',CHtml::listData(Espaciocomun::model()->findAll(),"ecCodigo","ecCodigo")); ?>
		<?php echo $form->error($model,'ecCodigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reFecha'); ?>
		<?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"reFecha",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?>
		<?php echo $form->error($model,'reFecha'); ?>
	</div>
<?php echo CHtml::ajaxLink('Consultar',array('reservaespaciocomun_res/ObtenerHoras'),array('update'=>'#Reservaespaciocomun_res_reHoraInicio','type'=>'POST',)); ?>	
	<div class="row">
		<?php echo $form->labelEx($model,'adRut'); ?>
		<?php echo $form->textField($model,'adRut',array('value'=>Yii::app()->user->name,'readonly'=>'false')); ?>
		<?php echo $form->error($model,'adRut'); ?>
	</div>

	<div class="row" id="hora">
		<?php echo $form->labelEx($model,'reHoraInicio'); ?>
		<?php echo $form->dropDownList($model,'reHoraInicio',array(''=>'seleccione fecha'),
		 array(
		 	'ajax'=>array(
		 		'type'=>'POST',
		 		'url'=>Ccontroller::createUrl('reservaespaciocomun_res/ObtenerHoraFin'),
		 		'update'=>'#Reservaespaciocomun_res_reHoraFin',
		 		),
		 	)
		 	); ?>
	</div>

	<div class="row" style='display:none'>
		<?php //echo $form->labelEx($model,'reHoraFin'); ?>
		<?php echo $form->dropDownList($model,'reHoraFin',array(''=>'seleccione fecha','style' => 'display: none')); ?>
		<?php echo $form->error($model,'reHoraFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
$(document).ready(function(){
    $("#hora").hide();
    $("#yt0").hide();
    $("#yt0").click(function(){
    $("#hora").show();
  });
    $("#Reservaespaciocomun_res_reFecha").change(function(){
    $("#yt0").show();
  });

});
</script>