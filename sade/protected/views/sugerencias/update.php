<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	$model->sgId=>array('view','id'=>$model->sgId),
	'Responder',
);

$this->menu=array(
	array('label'=>'Lista de Sugerencias', 'url'=>array('index')),
	array('label'=>'Crear Sugerencia', 'url'=>array('create')),
	array('label'=>'Ver Sugerencias', 'url'=>array('view', 'id'=>$model->sgId)),
	array('label'=>'Administrar Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Responder Sugerencia <?php echo $model->sgId; ?></h1>

<?php 

if($model->sfRespuesta != null) $model->sfLeido ='1'; 

$this->renderPartial('_form', array('model'=>$model)); ?>