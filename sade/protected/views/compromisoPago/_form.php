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














<table class="items">

<tr>
<td><?php echo $form->labelEx($model,'cpCodigo'); ?></td><td><?php echo $form->textField($model,'cpCodigo',array('size'=>10,'maxlength'=>10)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpCodigo'); ?></td></tr>


<tr>
<td><?php echo $form->labelEx($model,'cpFechaVencimiento'); ?></td><td><?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"cpFechaVencimiento",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?></td>
</tr>
<tr>	<td><?php echo $form->error($model,'cpFechaVencimiento'); ?></td>	</tr>



<tr>
<td><?php echo $form->labelEx($model,'cpMonto'); ?></td><td><?php echo $form->textField($model,'cpMonto',array('size'=>10,'maxlength'=>10)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpMonto'); ?></td></tr>


<tr>
<td><?php echo $form->labelEx($model,'cpDescripcion'); ?></td><td><?php echo $form->textField($model,'cpDescripcion',array('size'=>60,'maxlength'=>255)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpDescripcion'); ?></td></tr>


<tr>
<td>		<?php echo $form->labelEx($model,'cpFechaIngreso'); ?></td><td><?php echo $form->textField($model,'cpFechaIngreso', array('value'=>date('Y-m-d'),'readonly'=>'false')); ?>
		<!-- ingresa la fecha actual y no se puede modificar --></td>
</tr>
<tr><td><?php echo $form->error($model,'cpFechaIngreso'); ?></td></tr>


<tr>
<td><?php echo $form->labelEx($model,'cpObs'); ?></td><td><?php echo $form->textField($model,'cpObs',array('size'=>60,'maxlength'=>255)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpObs'); ?></td></tr>

<tr>
<td>	<?php echo $form->labelEx($model,'cpNumeroBoleta'); ?></td><td><?php echo $form->textField($model,'cpNumeroBoleta',array('size'=>10,'maxlength'=>10)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpNumeroBoleta'); ?></td></tr>



<tr>
<td><?php echo $form->labelEx($model,'cpFechaRealPago'); ?></td><td><?php 
		$this->widget("zii.widgets.jui.CJuiDatePicker",array(
			"attribute"=>"cpFechaRealPago",
			"model"=>$model,
			"language"=>"es",
			"options"=>array(
				"dateFormat"=>"yy-mm-dd"
				)
			));
		?></td>
</tr>
<tr><td><?php echo $form->error($model,'cpFechaRealPago'); ?></td></tr>


</table>




	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->