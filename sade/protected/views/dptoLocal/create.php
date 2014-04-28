<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/locals'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
);
?>

<h1>Crear Departamento o Local</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>