<?php
/* @var $this Reservaespaciocomun_resController */
/* @var $model Reservaespaciocomun_res */

$this->breadcrumbs=array(
	'Reserva espacio común'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>