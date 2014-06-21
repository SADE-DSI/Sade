<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/Administrador'=>array('index'),
	$model->caRut,
);

$this->menu=array(
	array('label'=>'Listar Conserje/Administrador', 'url'=>array('index')),
	array('label'=>'Crear Conserje/Administrador', 'url'=>array('create')),
	array('label'=>'Actualizar Conserje/Administrador', 'url'=>array('update', 'id'=>$model->caRut)),
	array('label'=>'Eliminar Conserje/Administrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->caRut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Conserje/Administrador', 'url'=>array('admin')),
);
?>

<h1>Ver Conserje/Administrador <?php echo $model->caRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'caRut',
	),
)); ?>
