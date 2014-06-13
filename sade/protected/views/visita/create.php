<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Datos Visitas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Datos Visita', 'url'=>array('index')),
	array('label'=>'Administrar Datos Visita', 'url'=>array('admin')),
);
?>

<h1>Crear Visita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>