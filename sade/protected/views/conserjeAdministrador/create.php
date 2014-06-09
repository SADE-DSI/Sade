<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/Administrador'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Conserje/Administrador', 'url'=>array('index')),
	array('label'=>'Administrador Conserje/Administrador', 'url'=>array('admin')),
);
?>

<h1>Crear Conserje/Administrador</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'persona'=>$persona)); ?>