<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmId,
);

$this->menu=array(
	array('label'=>'List Pagomensual', 'url'=>array('index')),
	array('label'=>'Create Pagomensual', 'url'=>array('create')),
	array('label'=>'Update Pagomensual', 'url'=>array('update', 'id'=>$model->pmId)),
	array('label'=>'Delete Pagomensual', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pmId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>View Pagomensual #<?php echo $model->pmId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
		'pmId',
	),
)); ?>
