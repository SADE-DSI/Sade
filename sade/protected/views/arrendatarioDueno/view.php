<?php
/* @var $this ArrendatarioduenoController */
/* @var $model Arrendatariodueno */

$this->breadcrumbs=array(
	'Arrendatarios/Dueños'=>array('index'),
	$model->adRut,
);

$this->menu=array(
	array('label'=>'Listar Arrendatarios/Dueños', 'url'=>array('index')),
	array('label'=>'Crear Arrendatarios/Dueños', 'url'=>array('create')),
	array('label'=>'Actualizar Arrendatarios/Dueños', 'url'=>array('update', 'id'=>$model->adRut)),
	array('label'=>'Eliminar Arrendatarios/Dueños', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->adRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Arrendatarios/Dueños', 'url'=>array('admin')),
);
?>

<h1>Ver Arrendatarios/Dueños #<?php echo $model->adRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	
	'data'=>$model,
	'attributes'=>array(
		'adRut',
		'adClave',
		'adEstado',
	),
)); ?>
