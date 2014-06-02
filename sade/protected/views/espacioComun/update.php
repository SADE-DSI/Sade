<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ecCodigo=>array('view','id'=>$model->ecCodigo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
	array('label'=>'Ver Espacio Común', 'url'=>array('view', 'id'=>$model->ecCodigo)),
	array('label'=>'Administrar Espacios Comunes', 'url'=>array('admin')),
);
?>

<h1>Modificar Espacio Común <?php echo $model->ecCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>