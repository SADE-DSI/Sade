<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->maCodigo=>array('view','id'=>$model->maCodigo),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Material', 'url'=>array('index')),
	array('label'=>'Crear Material', 'url'=>array('create')),
	array('label'=>'Ver Material', 'url'=>array('view', 'id'=>$model->maCodigo)),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Actualizar Material <?php echo $model->maCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>