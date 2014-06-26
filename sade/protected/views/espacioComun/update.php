<?php
/* @var $this EspaciocomunController */
/* @var $model Espaciocomun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ecCodigo=>array('view','id'=>$model->ecCodigo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->ecCodigo)),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Modificar Espacio Común <?php echo $model->ecCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>