<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Administrar Espacios Comunes', 'url'=>array('admin')),
);
?>

<h1>Crear Espacio Comun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>