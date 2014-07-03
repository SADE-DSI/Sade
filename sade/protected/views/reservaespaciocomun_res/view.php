<?php
/* @var $this Reservaespaciocomun_resController */
/* @var $model Reservaespaciocomun_res */

$this->breadcrumbs=array(
	'Reserva espacio común'=>array('index'),
	$model->reId,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Reserva #<?php echo $model->reId; ?></h1>

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
