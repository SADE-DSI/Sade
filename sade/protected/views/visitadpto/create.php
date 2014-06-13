<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>Ingresar Visita</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'visita'=>$visita)); ?>