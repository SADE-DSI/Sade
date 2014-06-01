<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/administradorConserje/administrador'=>array('index'),
	$model->caRut,
);

$this->menu=array(
	array('label'=>'Listar Conserje/administrador', 'url'=>array('index')),
	array('label'=>'Crear Conserje/administrador', 'url'=>array('create')),
	array('label'=>'Actualizar Conserje/administrador', 'url'=>array('update', 'id'=>$model->caRut)),
	array('label'=>'Eliminar Conserje/administrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Conserje/administrador', 'url'=>array('admin')),
);
?>

<h1>Ver Conserje/administrador #<?php echo $model->caRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caRut',
		'caClave',
	),
)); ?>
