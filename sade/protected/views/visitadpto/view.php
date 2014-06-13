<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->vdCodigo,
);

$this->menu=array(
	array('label'=>'Listar Visita', 'url'=>array('index')),
	array('label'=>'Crear Visita', 'url'=>array('create')),
	array('label'=>'Actualizar Visita', 'url'=>array('update', 'id'=>$model->vdCodigo)),
	array('label'=>'Borrar Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vdCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Visita', 'url'=>array('admin')),
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
