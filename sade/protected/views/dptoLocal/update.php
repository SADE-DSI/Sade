<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dptos/Locales'=>array('index'),
	$model->dlDireccion=>array('view','id'=>$model->dlDireccion),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/Local', 'url'=>array('index')),
	array('label'=>'Crear Dpto/Local', 'url'=>array('create')),
	array('label'=>'Ver Dpto/Local', 'url'=>array('view', 'id'=>$model->dlDireccion)),
	array('label'=>'Administrar Dpto/Local', 'url'=>array('admin')),
);
?>

<h1>Actualizar Dptos/Local <?php echo $model->dlDireccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>