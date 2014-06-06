<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/Administrador'=>array('index'),
	$model->caRut=>array('view','id'=>$model->caRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Conserje/Administrador', 'url'=>array('index')),
	array('label'=>'Crear Conserje/Administrador', 'url'=>array('create')),
	array('label'=>'Ver Conserje/Administrador', 'url'=>array('view', 'id'=>$model->caRut)),
	array('label'=>'Administrar Conserje/Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Conserje/administrador <?php echo $model->caRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>