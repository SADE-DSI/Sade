<?php
/* @var $this VisitaController */
/* @var $model Visita */

$this->breadcrumbs=array(
	'Datos Visitas'=>array('index'),
	$model->viRut=>array('view','id'=>$model->viRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Datos Visitas', 'url'=>array('index')),
	array('label'=>'Crear Datos Visita', 'url'=>array('create')),
	array('label'=>'Ver Datos Visita', 'url'=>array('view', 'id'=>$model->viRut)),
	array('label'=>'Administrar Datos Visita', 'url'=>array('admin')),
);
?>

<h1>Actualizar Datos Visita <?php echo $model->viRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>