<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserje/administrador'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Conserje/administrador', 'url'=>array('index')),
	array('label'=>'Administrador Conserje/administrador', 'url'=>array('admin')),
);
?>

<h1>Crear Conserje/administrador</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'persona'=>$persona)); ?>