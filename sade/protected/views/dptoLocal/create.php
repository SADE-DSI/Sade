<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/Local'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
);
?>

<h1>Crear Dpto/local</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>