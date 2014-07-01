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
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<?php if ($model->isNewRecord ) {
?>



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

<?php echo CHtml::ajaxLink('Consultar',array('reservaespaciocomun/ObtenerHoras'),array('update'=>'#Reservaespaciocomun_reHoraInicio','type'=>'POST',)); ?>	

	<div class="row" id="hora">
		<?php echo $form->labelEx($model,'reHoraInicio'); ?>
		<?php echo $form->dropDownList($model,'reHoraInicio',array(''=>'seleccione fecha'),
		 array(
		 	'ajax'=>array(
		 		'type'=>'POST',
		 		'url'=>Ccontroller::createUrl('reservaespaciocomun/ObtenerHoraFin'),
		 		'update'=>'#Reservaespaciocomun_reHoraFin',
		 		),
		 	)
		 	); ?>
		<?php echo $form->error($model,'reHoraInicio'); ?>
	</div>

	<div class="row" style='display:none'>
		<?php //echo $form->labelEx($model,'reHoraFin'); ?>
		<?php echo $form->dropDownList($model,'reHoraFin',array(''=>'seleccione fecha','style' => 'display: none')); ?>
		<?php echo $form->error($model,'reHoraFin'); ?>
	</div>


<?php
}?>
	
<?php if (!$model->isNewRecord ) {
?>
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

<?php echo CHtml::ajaxLink('Consultar',array('reservaespaciocomun/ObtenerHoras'),array('update'=>'#Reservaespaciocomun_reHoraInicio','type'=>'POST',)); ?>	

	<div class="row">
		<?php echo $form->labelEx($model,'reHoraInicio'); ?>
		<?php echo $form->dropDownList($model,'reHoraInicio',array(''=>'seleccione fecha'),
		 array(
		 	'ajax'=>array(
		 		'type'=>'POST',
		 		'url'=>Ccontroller::createUrl('reservaespaciocomun/ObtenerHoraFin'),
		 		'update'=>'#Reservaespaciocomun_reHoraFin',
		 		),
		 	)
		 	); ?>
		<?php echo $form->error($model,'reHoraInicio'); ?>
	</div>

	<div class="row" type="hidden">
		<?php echo $form->labelEx($model,'reHoraFin'); ?>
		<?php echo $form->dropDownList($model,'reHoraFin',array(''=>'seleccione fecha')); ?>
		<?php echo $form->error($model,'reHoraFin'); ?>
	</div>


<?php
}?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
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
    $("#Reservaespaciocomun_reFecha").change(function(){
    $("#yt0").show();
  });

});
</script>