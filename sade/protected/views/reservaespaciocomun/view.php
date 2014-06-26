<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reId,
);

$this->menu=array(
	array('label'=>'List Reservaespaciocomun', 'url'=>array('index')),
	array('label'=>'Create Reservaespaciocomun', 'url'=>array('create')),
	array('label'=>'Update Reservaespaciocomun', 'url'=>array('update', 'id'=>$model->reId)),
	array('label'=>'Delete Reservaespaciocomun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservaespaciocomun', 'url'=>array('admin')),
);
?>

<h1>View Reservaespaciocomun #<?php echo $model->reId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reId',
		'ecCodigo',
		'reFecha',
		'adRut',
		'reHoraInicio',
		'reHoraFin',
	),
)); ?>
