<?php
/* @var $this ResidedptoController */
/* @var $model Residedpto */

$this->breadcrumbs=array(
	'Residedptos'=>array('index'),
	$model->rdFechaInicio,
);

$this->menu=array(
	array('label'=>'List Residedpto', 'url'=>array('index')),
	array('label'=>'Create Residedpto', 'url'=>array('create')),
	array('label'=>'Update Residedpto', 'url'=>array('update', 'id'=>$model->rdFechaInicio)),
	array('label'=>'Delete Residedpto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rdFechaInicio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Residedpto', 'url'=>array('admin')),
);
?>

<h1>View Residedpto #<?php echo $model->rdFechaInicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rdFechaInicio',
		'adRut',
		'dlDireccion',
		'rdFechaFin',
	),
)); ?>
