<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldopersonals'=>array('index'),
	$model->spCodigo=>array('view','id'=>$model->spCodigo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
	array('label'=>'Ver Sueldo Personal', 'url'=>array('view', 'id'=>$model->spCodigo)),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sueldo Personal <?php echo $model->spCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>