<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	$model->sgId=>array('view','id'=>$model->sgId),
	'Responder',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->sgId)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Responder Sugerencia <?php echo $model->sgId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>