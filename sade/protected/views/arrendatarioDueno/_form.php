<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arrendatariodueno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); 
?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary(array($model,$persona,$reside)); ?>



<table class="items">


<tr>
<td>		<?php echo $form->labelEx($model,'adRut'); ?></td><td><?php echo $form->textField($model,'adRut',array('maxlength'=>12)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'adRut'); ?></td></tr>

<tr>
<td>		<?php echo $form->labelEx($model,'adClave'); ?></td><td><?php echo $form->passwordField($model,'adClave',array('size'=>30,'maxlength'=>30)); ?></td>
</tr>
<tr><td><?php echo $form->error($model,'adClave'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peNombresApellidos'); ?></td><td><?php echo $form->textField($persona,'peNombresApellidos'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peNombresApellidos'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peDireccion'); ?></td>

 <td><?php $fecha=date('Y-m-d');
 $data = CHtml::listData(Dptolocal::model()->findAllBySql
 ("select distinct D.dlDireccion from dptolocal D where  
  (not exists (select * from residedpto R where D.dlDireccion=R.dlDireccion or
  (R.rdFechaFin>'$fecha' and R.dlDireccion=D.dlDireccion)))"),'dlDireccion','dlDireccion');
 echo $form->dropDownList($persona,'peDireccion',$data,array('empty'=>Yii::t('','Seleccione'))); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peDireccion'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peEmail'); ?></td><td><?php echo $form->textField($persona,'peEmail'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peEmail'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peTelefono'); ?></td><td><?php echo $form->textField($persona,'peTelefono'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peTelefono'); ?></td></tr>

<tr>
<td><?php echo $form->labelEx($persona,'peDescripcion'); ?></td><td><?php echo $form->textField($persona,'peDescripcion'); ?></td>
</tr>
<tr><td><?php echo $form->error($persona,'peDescripcion'); ?></td></tr>

	<tr>
		<td><?php echo $form->labelEx($reside,'rdFechaFin'); ?></td>
		<td><?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'rdFechaFin', 
							'model'=>$reside,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							)
						)); ?></td>
		<td><?php echo $form->error($reside,'rdFechaFin'); ?></td>
	</tr>

</table>
	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->