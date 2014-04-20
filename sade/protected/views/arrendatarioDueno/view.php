<?php
/* @var $this ArrendatarioDuenoController */
/* @var $model ArrendatarioDueno */

$this->breadcrumbs=array(
	'Arrendatario Duenos'=>array('index'),
	$model->adRut,
);

$this->menu=array(
	array('label'=>'List ArrendatarioDueno', 'url'=>array('index')),
	array('label'=>'Create ArrendatarioDueno', 'url'=>array('create')),
	array('label'=>'Update ArrendatarioDueno', 'url'=>array('update', 'id'=>$model->adRut)),
	array('label'=>'Delete ArrendatarioDueno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->adRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArrendatarioDueno', 'url'=>array('admin')),
);
?>

<h1>View ArrendatarioDueno #<?php echo $model->adRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'adRut',
		'adClave',
		'adEstado',
		'adFechaLiberacion',
	),
)); ?>
