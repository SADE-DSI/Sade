<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitadptos'=>array('index'),
	$model->vdCodigo,
);

$this->menu=array(
	array('label'=>'List Visitadpto', 'url'=>array('index')),
	array('label'=>'Create Visitadpto', 'url'=>array('create')),
	array('label'=>'Update Visitadpto', 'url'=>array('update', 'id'=>$model->vdCodigo)),
	array('label'=>'Delete Visitadpto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vdCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitadpto', 'url'=>array('admin')),
);
?>

<h1>View Visitadpto #<?php echo $model->vdCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vdCodigo',
		'viRut',
		'dlDireccion',
		'vdFechaIngreso',
		'caRut',
		'vdFechaSalida',
	),
)); ?>
