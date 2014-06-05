<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldopersonals'=>array('index'),
	$model->peRut,
);

$this->menu=array(
	array('label'=>'List Sueldopersonal', 'url'=>array('index')),
	array('label'=>'Create Sueldopersonal', 'url'=>array('create')),
	array('label'=>'Update Sueldopersonal', 'url'=>array('update', 'id'=>$model->peRut)),
	array('label'=>'Delete Sueldopersonal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->peRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sueldopersonal', 'url'=>array('admin')),
);
?>

<h1>View Sueldopersonal #<?php echo $model->peRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'spFechaPago',
		'peRut',
		'spOtrosDescuento',
		'spHorasExtra',
	),
)); ?>
