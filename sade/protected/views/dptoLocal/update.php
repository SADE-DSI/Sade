<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dptos/locales'=>array('index'),
	$model->dlDireccion=>array('view','id'=>$model->dlDireccion),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/local', 'url'=>array('index')),
	array('label'=>'Crear Dpto/local', 'url'=>array('create')),
	array('label'=>'Ver Dpto/local', 'url'=>array('view', 'id'=>$model->dlDireccion)),
	array('label'=>'Administrar Dpto/local', 'url'=>array('admin')),
);
?>

<h1>Actualizar Dptos/Local <?php echo $model->dlDireccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>