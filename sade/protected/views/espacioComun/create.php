<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Crear Espacio Común</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>