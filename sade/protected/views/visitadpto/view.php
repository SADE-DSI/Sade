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
	array('label'=>'Borrar Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vdCodigo),'confirm'=>'¿Está seguro que desea eliminar esta Visita?')),
	array('label'=>'Administrar Visita', 'url'=>array('admin')),
	array('label'=>'Registrar Salida Visita', 'url'=>array('salidaVisita', 'id'=>$model->vdCodigo)),
);
?>

<h1>Ver Visita <?php echo $model->vdCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vdCodigo',
		'viRut',
		array('label'=>'Nombre Visita',
			'type'=>'text',
			'value'=>$model->getDatoVisita($model->viRut, 'viNombresApellidos')),
		array('label'=>'Observación Visita',
			'type'=>'text',
			'value'=>$model->getDatoVisita($model->viRut, 'viObs')),
		'dlDireccion',
		'vdFechaIngreso',	
		'vdFechaSalida',
		'caRut'
	),
)); ?>
