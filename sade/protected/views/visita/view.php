<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Datos Visitas'=>array('index'),
	$model->viRut,
);

$this->menu=array(
	array('label'=>'Listar Datos Visitas', 'url'=>array('index')),
	array('label'=>'Crear Datos Visita', 'url'=>array('create')),
	array('label'=>'Actualizar Datos Visita', 'url'=>array('update', 'id'=>$model->viRut)),
	array('label'=>'Administrar Datos Visitas', 'url'=>array('admin')),
);
?>

<h1>Ver Visita <?php echo $model->viRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'viRut',
		'viNombresApellidos',
		'viObs',
	),
)); ?>
