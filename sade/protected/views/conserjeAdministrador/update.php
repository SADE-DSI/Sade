<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/administrador'=>array('index'),
	$model->caRut=>array('view','id'=>$model->caRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Conserje/administrador', 'url'=>array('index')),
	array('label'=>'Crear Conserje/administrador', 'url'=>array('create')),
	array('label'=>'Ver Conserje/administrador', 'url'=>array('view', 'id'=>$model->caRut)),
	array('label'=>'Administrar Conserje/administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Conserje/administrador <?php echo $model->caRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>