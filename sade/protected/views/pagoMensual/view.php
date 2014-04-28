<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmCodigo,
);

$this->menu=array(
	array('label'=>'List Pagomensual', 'url'=>array('index')),
	array('label'=>'Create Pagomensual', 'url'=>array('create')),
	array('label'=>'Update Pagomensual', 'url'=>array('update', 'id'=>$model->pmCodigo)),
	array('label'=>'Delete Pagomensual', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pmCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>View Pagomensual #<?php echo $model->pmCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pmCodigo',
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
		'pmId',
	),
)); ?>
